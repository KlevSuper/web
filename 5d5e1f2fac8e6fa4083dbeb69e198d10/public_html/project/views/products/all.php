<h1><?= $h1; ?></h1>
<div class="products-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['name']; ?></td>
                <td>$<?= number_format($product['price'], 2); ?></td>
                <td>
                    <a href="/products/<?= $product['id']; ?>/" class="btn">Подробнее</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>