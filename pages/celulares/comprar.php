<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #00abff;
        --primary-dark: #00abff;
        --secondary: #10b981;
        --dark: #111827;
        --gray: #6b7280;
        --light-gray: #f3f4f6;
        --white: #ffffff;
        --red: #ef4444;
        --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }



    /* Product Grid */
    .product-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        margin: 6rem 0 0;
    }

    /* Image Gallery */
    .image-gallery {
        position: relative;
    }

    .main-image {
        width: 100%;
        height: 500px;
        background: var(--white);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main-image img {
        max-width: 80%;
        max-height: 80%;
        object-fit: contain;
        transition: transform 0.5s;
    }

    .main-image:hover img {
        transform: scale(1.05);
    }

    .badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: var(--red);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-size: 0.875rem;
        font-weight: 600;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .thumbnails {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
        justify-content: center;
    }

    .thumbnail {
        width: 80px;
        height: 80px;
        background: var(--white);
        border-radius: 10px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s;
        border: 2px solid transparent;
    }

    .thumbnail:hover,
    .thumbnail.active {
        border-color: var(--primary);
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Product Info */
    .product-info {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .product-title {
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1.2;
        color: var(--dark);
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .stars {
        color: #fbbf24;
    }

    .rating-text {
        color: var(--gray);
        font-size: 0.875rem;
    }

    .price-section {
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        padding: 1.5rem;
        border-radius: 15px;
        margin: 1rem 0;
    }

    .old-price {
        color: var(--gray);
        text-decoration: line-through;
        font-size: 1.25rem;
    }

    .current-price {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary);
        margin: 0.5rem 0;
    }

    .installment {
        color: var(--dark);
        font-size: 1.125rem;
    }

    .installment strong {
        color: var(--secondary);
    }

    /* Options */
    .options {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .option-group {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .option-label {
        font-weight: 600;
        color: var(--dark);
    }

    .color-options,
    .storage-options {
        display: flex;
        gap: 0.75rem;
    }

    .color-option {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        border: 3px solid transparent;
        transition: all 0.3s;
        position: relative;
    }

    .color-option:hover {
        transform: scale(1.1);
    }

    .color-option.selected {
        border-color: var(--primary);
    }

    .color-option.selected::after {
        content: '✓';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight: bold;
    }

    .storage-option {
        padding: 0.75rem 1.5rem;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s;
        background: white;
        font-weight: 600;
        text-align: center;
    }

    .storage-option:hover {
        border-color: var(--primary);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(37, 99, 235, 0.2);
    }

    .storage-option.selected {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    /* Quantity Selector */
    .quantity-selector {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1rem 0;
    }

    .quantity-btn {
        width: 40px;
        height: 40px;
        border: 2px solid #e5e7eb;
        background: white;
        border-radius: 10px;
        cursor: pointer;
        font-size: 1.25rem;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-btn:hover {
        border-color: var(--primary);
        color: var(--primary);
    }

    .quantity {
        font-size: 1.25rem;
        font-weight: 600;
        min-width: 40px;
        text-align: center;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 1rem 2rem;
        border: none;
        border-radius: 12px;
        font-size: 1.125rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        flex: 1;
        position: relative;
        overflow: hidden;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
    }

    .btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
    }

    .btn-secondary {
        background: white;
        color: var(--primary);
        border: 2px solid var(--primary);
    }

    .btn-secondary:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
    }

    /* Benefits */
    .benefits {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 2rem;
    }

    .benefit {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--gray);
        font-size: 0.875rem;
    }

    .benefit-icon {
        color: var(--secondary);
        font-size: 1.25rem;
    }

    /* Product Details */
    .product-details {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .tabs {
        display: flex;
        gap: 2rem;
        border-bottom: 2px solid #e5e7eb;
        margin-bottom: 2rem;
    }

    .tab {
        padding: 1rem 0;
        font-weight: 600;
        color: var(--gray);
        cursor: pointer;
        position: relative;
        transition: color 0.3s;
    }

    .tab.active {
        color: var(--primary);
    }

    .tab.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--primary);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
        animation: fadeIn 0.5s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .description {
        color: var(--gray);
        line-height: 1.8;
    }

    .specs-table {
        width: 100%;
        border-collapse: collapse;
    }

    .specs-table tr {
        border-bottom: 1px solid #e5e7eb;
    }

    .specs-table td {
        padding: 1rem 0;
    }

    .specs-table td:first-child {
        font-weight: 600;
        color: var(--dark);
        width: 40%;
    }

    .specs-table td:last-child {
        color: var(--gray);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .product-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .product-title {
            font-size: 2rem;
        }

        .current-price {
            font-size: 2.5rem;
        }

        .benefits {
            grid-template-columns: 1fr;
        }

        .action-buttons {
            flex-direction: column;
        }

        .tabs {
            overflow-x: auto;
            gap: 1rem;
        }
    }

    /* Loading Animation */
    .loading {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255, 255, 255, .3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* Toast Notification */
    .toast {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        background: var(--dark);
        color: white;
        padding: 1rem 2rem;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transform: translateY(100px);
        opacity: 0;
        transition: all 0.3s;
        z-index: 200;
    }

    .toast.show {
        transform: translateY(0);
        opacity: 1;
    }
</style>
<?php
require_once 'Products.php'; // ou outro arquivo onde estão os $iphones

$id = $_GET['id'] ?? null;
$produto = null;

if ($id) {
    foreach ($iphones as $item) {
        if ($item->id == $id) {
            $produto = $item;
            break;
        }
    }
}

// Verifica se encontrou o produto
if (!$produto) {
    echo "<h2>Produto não encontrado</h2>";
    exit;
}
?>


<div class="container">
    <div class="product-grid">
        <div class="image-gallery">
            <?php
            $imagens = getImagesForModel($produto->pastaImagens);
            $imagemPrincipal = $imagens[0] ?? $produto->imagem;
            ?>
            <div class="main-image">
                <span class="badge">-15% OFF</span>
                <img id="mainImage" src="<?= $imagemPrincipal ?>" alt="<?= $produto->nome ?>">
            </div>
            <div class="thumbnails">
                <?php foreach ($imagens as $index => $img): ?>
                    <div class="thumbnail <?= $index === 0 ? 'active' : '' ?>" onclick="changeImage(<?= $index ?>)">
                        <img src="<?= $img ?>" alt="View <?= $index + 1 ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="product-info">
            <h1 class="product-title"><?= $produto->nome ?></h1>

            <div class="rating">
                <span class="stars">⭐⭐⭐⭐⭐</span>
                <span class="rating-text">4.9 (1.234 avaliações)</span>
            </div>

            <div class="price-section">
                <p class="old-price">R$ <?= number_format($produto->preco_original, 2, ',', '.') ?></p>
                <p class="current-price">R$ <?= number_format($produto->preco_atual, 2, ',', '.') ?></p>
                <p class="installment">Em até <strong>12x de R$
                        <?= number_format($produto->preco_atual / 12, 2, ',', '.') ?></strong> sem juros</p>
            </div>

            <form id="formCompra" onsubmit="return false;">
                <div class="options">
                    <div class="option-group">
                        <label class="option-label">Cor:</label>
                        <select class="form-select" id="corProduto" required>
                            <option value="" disabled selected>Selecione</option>
                            <?php foreach ($produto->cores as $cor): ?>
                                <option value="<?= $cor ?>"><?= $cor ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="option-group">
                        <label class="option-label">Armazenamento:</label>
                        <select class="form-select" id="armazenamentoProduto" required>
                            <option value="" disabled selected>Selecione</option>
                            <?php foreach ($produto->armazenamentos as $gb): ?>
                                <option value="<?= $gb ?>"><?= $gb ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="quantity-selector">
                    <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                    <span class="quantity" id="quantity">1</span>
                    <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                </div>

                <div class="action-buttons mt-3">
                    <a id="linkWhatsapp" href="#" class="btn btn-success w-100" target="_blank">
                        <i class="fab fa-whatsapp me-1"></i> Comprar Agora pelo WhatsApp
                    </a>
                </div>
            </form>

            <div class="benefits mt-4">
                <div class="benefit">✓ Frete Grátis</div>
                <div class="benefit">✓ Garantia de 1 ano</div>
                <div class="benefit">✓ Devolução em 30 dias</div>
            </div>
        </div>
    </div>

    <!-- JS obrigatório para montar link WhatsApp -->
    <script>
        function updateWhatsappLink() {
            const cor = document.getElementById('corProduto').value;
            const arm = document.getElementById('armazenamentoProduto').value;
            const qtd = document.getElementById('quantity').innerText;
            const nome = "<?= $produto->nome ?>";
            const numero = "5544998170770";

            if (!cor || !arm) return;

            const msg =
                `Olá! Tenho interesse no *${nome}*.\n\nCor: *${cor}*\nArmazenamento: *${arm}*\nQuantidade: *${qtd}*\n\nPode me passar mais informações?`;

            const link = `https://wa.me/${numero}?text=${encodeURIComponent(msg)}`;
            document.getElementById('linkWhatsapp').href = link;
        }

        document.getElementById('corProduto').addEventListener('change', updateWhatsappLink);
        document.getElementById('armazenamentoProduto').addEventListener('change', updateWhatsappLink);
        document.querySelectorAll('.quantity-btn').forEach(btn => btn.addEventListener('click', updateWhatsappLink));

        function increaseQuantity() {
            const el = document.getElementById('quantity');
            el.innerText = parseInt(el.innerText) + 1;
        }

        function decreaseQuantity() {
            const el = document.getElementById('quantity');
            if (parseInt(el.innerText) > 1) el.innerText = parseInt(el.innerText) - 1;
        }
    </script>
</div>