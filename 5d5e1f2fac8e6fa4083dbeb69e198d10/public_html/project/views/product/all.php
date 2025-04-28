<h1>Список всех продуктов</h1>
<table border="1" cellpadding="8" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>ID</th>
            <th>Название</th>
            <th>Цена ($)</th>
            <th>Количество</th>
            <th>Категория</th>
            <th>Общая стоимость ($)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['products'] as $id => $product): ?>
        <tr>
            <td><?= $id ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td><?= $product['category'] ?></td>
            <td><?= $product['price'] * $product['quantity'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>