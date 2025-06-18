$(document).ready(function () {
    // Máscara para telefone brasileiro
    $('#phone').on('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        let formattedValue = '';

        if (value.length > 0) {
            formattedValue = '(' + value.substring(0, 2);
        }
        if (value.length > 2) {
            formattedValue += ') ' + value.substring(2, 7);
        }
        if (value.length > 7) {
            formattedValue += '-' + value.substring(7, 11);
        }

        e.target.value = formattedValue;
    });

    // Envio do formulário
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        // Validações básicas
        const nome = $('#fullName').val().trim();
        const telefone = $('#phone').val().trim();
        const email = $('#email').val().trim();
        const cidade = $('#city').val().trim();
        const comoEncontrou = $('#foundUs').val();
        const mensagem = $('#message').val().trim();

        // Validar campos
        if (nome.length < 3) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, insira seu nome completo!'
            });
            return;
        }

        if (!validarEmail(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, insira um e-mail válido!'
            });
            return;
        }

        if (telefone.length < 14) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, insira um telefone válido!'
            });
            return;
        }

        if (cidade.length < 3) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, insira sua cidade!'
            });
            return;
        }

        if (!comoEncontrou) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, selecione como nos encontrou!'
            });
            return;
        }

        if (mensagem.length < 10) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, digite uma mensagem com pelo menos 10 caracteres!'
            });
            return;
        }

        // Desabilitar botão e mostrar loading
        const btnSubmit = $('#btnSubmit');
        const btnText = btnSubmit.find('.btn-text');
        const btnOriginalText = btnText.text();

        btnSubmit.prop('disabled', true);
        btnText.html('<i class="fas fa-spinner fa-spin"></i> Enviando...');

        // Enviar dados via AJAX
        $.ajax({
            url: 'enviar-email.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Mensagem Enviada!',
                        text: response.message,
                        confirmButtonColor: '#4CAF50'
                    }).then(() => {
                        $('#contactForm')[0].reset();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro ao enviar',
                        text: response.message ||
                            'Ocorreu um erro. Tente novamente.',
                        confirmButtonColor: '#f44336'
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('Erro:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de conexão',
                    text: 'Não foi possível enviar a mensagem. Verifique sua conexão.',
                    confirmButtonColor: '#f44336'
                });
            },
            complete: function () {
                btnSubmit.prop('disabled', false);
                btnText.text(btnOriginalText);
            }
        });
    });

    // Função para validar email
    function validarEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});