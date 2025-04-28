<h1>Все пользователи</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
           <?= $user['name'] ?> (возраст: <?= $user['age'] ?>, зарплата: <?= $user['salary'] ?>)
        </li>
    <?php endforeach; ?>
</ul>