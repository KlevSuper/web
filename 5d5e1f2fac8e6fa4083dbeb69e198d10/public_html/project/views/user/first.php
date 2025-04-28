<h1>Первые <?= $count ?> пользователей</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
           <?= $user['name'] ?> (возраст: <?= $user['age'] ?>)
        </li>
    <?php endforeach; ?>
</ul>
