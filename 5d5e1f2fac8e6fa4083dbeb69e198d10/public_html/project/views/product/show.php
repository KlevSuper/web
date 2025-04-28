<h1>Продукт "<?= $data['product']['name'] ?>" из категории "<?= $data['product']['category'] ?>"</h1>
<p>Цена: <?= $data['product']['price'] ?>$, количество: <?= $data['product']['quantity'] ?></p>
<p>Стоимость (цена * количество): <?= $data['total'] ?>$</p>