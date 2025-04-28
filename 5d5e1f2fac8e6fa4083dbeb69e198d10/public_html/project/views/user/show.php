<h1>Профиль пользователя: <?= $user['name'] ?></h1>
<ul>
    <li>ID: <?= $user['id'] ?></li>
    <li>Имя: <?= $user['name'] ?></li>
    <?php if(isset($user['email'])): ?>
        <li>Email: <?= $user['email'] ?></li>
    <?php endif; ?>
    <?php if(isset($user['role'])): ?>
        <li>Роль: <?= $user['role'] ?></li>
    <?php endif; ?>
    <?php if(isset($user['age'])): ?>
        <li>Возраст: <?= $user['age'] ?></li>
    <?php endif; ?>
    <?php if(isset($user['salary'])): ?>
        <li>Зарплата: <?= $user['salary'] ?></li>
    <?php endif; ?>
</ul>
