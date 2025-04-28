<h1><?= $h1; ?></h1>
<div class="product">
    <div class="product-info">
        <p><strong>Цена:</strong> $<?= number_format($product['price'], 2); ?></p>
        <p><strong>Количество на складе:</strong> <?= $product['quantity']; ?></p>
        <p><strong>Описание:</strong></p>
        <div class="description"><?= nl2br($product['description']); ?></div>
    </div>
    <a href="/products/">Вернуться к списку товаров</a>
</div>