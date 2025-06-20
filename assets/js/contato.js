// Espera o documento HTML ser completamente carregado para então executar o script.
$(document).ready(function () {

    // --- MÁSCARA DE TELEFONE ---
    // Aplica uma máscara de telefone brasileiro (xx) xxxxx-xxxx ao campo com id="phone".
    $('#phone').on('input', function (e) {
        // Pega o valor atual do campo e remove todos os caracteres que não são números.
        let value = e.target.value.replace(/\D/g, '');
        let formattedValue = '';

        // Formata o valor com parênteses, espaço e hífen conforme o usuário digita.
        if (value.length > 0) { formattedValue = '(' + value.substring(0, 2); }
        if (value.length > 2) { formattedValue += ') ' + value.substring(2, 7); }
        if (value.length > 7) { formattedValue += '-' + value.substring(7, 11); }

        // Atualiza o valor do campo de input com a string já formatada.
        e.target.value = formattedValue;
    });


    // --- ENVIO DO FORMULÁRIO ---
    // Define a função que será executada quando o formulário com id="contactForm" for submetido.
    $('#contactForm').on('submit', function (e) {
        // Impede o comportamento padrão do formulário, que é recarregar a página.
        e.preventDefault();

        // Antes de começar uma nova validação, remove a classe de erro de qualquer campo que a possua.
        // Isso "limpa" o formulário a cada nova tentativa de envio.
        $('#contactForm .is-invalid').removeClass('is-invalid');

        // Função auxiliar reutilizável para mostrar erros de validação.
        // Recebe o campo (field) que deu erro e a mensagem (message) a ser exibida.
        function showError(field, message) {
            // Adiciona a classe CSS '.is-invalid' ao campo para destacá-lo (geralmente com uma borda vermelha).
            field.addClass('is-invalid');
            // Usa a biblioteca SweetAlert2 para mostrar um pop-up de erro customizado.
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message,
                // ESSENCIAL: Impede que o SweetAlert retorne o foco ao elemento que o chamou (o botão de submit).
                returnFocus: false,
                // Adiciona as classes de animação do Animate.css para mostrar e esconder o pop-up.
                showClass: {
                    popup: 'animate__animated animate__fadeInUp animate__faster'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutDown animate__faster'
                }
            }).then(() => {
                // Após o usuário fechar o alerta, foca o cursor diretamente no campo que contém o erro.
                field.focus();
            });
        }

        // --- VALIDAÇÕES CAMPO A CAMPO ---
        // A validação ocorre em sequência. Se um campo falhar, a função é interrompida com 'return'.
        if ($('#fullName').val().trim().length < 3) {
            showError($('#fullName'), 'Por favor, insira seu nome completo!');
            return;
        }
        if (!validarEmail($('#email').val().trim())) {
            showError($('#email'), 'Por favor, insira um e-mail válido!');
            return;
        }
        // A máscara completa (xx) xxxxx-xxxx tem 15 caracteres.
        if ($('#phone').val().trim().length < 15) {
            showError($('#phone'), 'Por favor, insira um telefone válido!');
            return;
        }
        if ($('#city').val().trim().length < 3) {
            showError($('#city'), 'Por favor, insira sua cidade!');
            return;
        }
        if (!$('#foundUs').val()) {
            showError($('#foundUs'), 'Por favor, selecione como nos encontrou!');
            return;
        }
        if ($('#message').val().trim().length < 10) {
            showError($('#message'), 'Por favor, digite uma mensagem com pelo menos 10 caracteres!');
            return;
        }

        // --- SE TUDO ESTIVER VÁLIDO, PROSSIGA COM O ENVIO AJAX ---
        // Se o código chegou até aqui, significa que todas as validações passaram.

        // Armazena referências do botão de envio e do seu texto para restaurá-los depois.
        const btnSubmit = $('#btnSubmit');
        const btnText = btnSubmit.find('.btn-text');
        const btnOriginalText = btnText.text();

        // Desabilita o botão para impedir envios múltiplos e mostra um feedback de carregamento.
        btnSubmit.prop('disabled', true);
        btnText.html('<i class="fas fa-spinner fa-spin"></i> Enviando...');

        // Inicia a requisição AJAX para o servidor.
        $.ajax({
            url: 'enviar-email.php', // O arquivo no servidor que processará os dados.
            type: 'POST', // O método HTTP a ser usado.
            data: $(this).serialize(), // Coleta e formata todos os dados do formulário para envio.
            dataType: 'json', // O tipo de dado que esperamos receber como resposta do servidor.

            // Função a ser executada se a requisição for bem-sucedida (status 200).
            success: function (response) {
                // Verifica a resposta do servidor.
                if (response.success) {
                    // Se o envio foi um sucesso, mostra um alerta de sucesso.
                    Swal.fire({
                        icon: 'success',
                        title: 'Mensagem Enviada!',
                        text: response.message,
                        confirmButtonColor: '#4CAF50'
                    }).then(() => {
                        // Após o alerta de sucesso, reseta todos os campos do formulário.
                        $('#contactForm')[0].reset();
                        // Garante que nenhuma classe de erro permaneça após o reset.
                        $('#contactForm .is-invalid').removeClass('is-invalid');
                    });
                } else {
                    // Se o servidor retornou um erro (ex: falha ao enviar o e-mail), mostra um alerta de erro.
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro ao enviar',
                        text: response.message || 'Ocorreu um erro. Tente novamente.',
                        confirmButtonColor: '#f44336'
                    });
                }
            },
            // Função a ser executada se houver um erro de comunicação com o servidor (ex: 404, 500, sem internet).
            error: function (xhr, status, error) {
                console.error('Erro AJAX:', error); // Loga o erro no console para depuração.
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de conexão',
                    text: 'Não foi possível enviar a mensagem. Verifique sua conexão.',
                    confirmButtonColor: '#f44336'
                });
            },
            // Função a ser executada sempre ao final da requisição, seja ela um sucesso ou um erro.
            complete: function () {
                // Reabilita o botão e restaura seu texto original.
                btnSubmit.prop('disabled', false);
                btnText.text(btnOriginalText);
            }
        });
    });

    // --- MELHORIA DE EXPERIÊNCIA DO USUÁRIO (UX) ---
    // Adiciona um "ouvinte" a todos os campos do formulário.
    // Assim que o usuário começar a digitar em um campo, a classe de erro é removida.
    $('#contactForm input, #contactForm select, #contactForm textarea').on('input', function () {
        $(this).removeClass('is-invalid');
    });

    // --- FUNÇÃO PARA VALIDAR EMAIL ---
    // Função que usa uma Expressão Regular (Regex) para verificar se o formato do e-mail é válido.
    function validarEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});
