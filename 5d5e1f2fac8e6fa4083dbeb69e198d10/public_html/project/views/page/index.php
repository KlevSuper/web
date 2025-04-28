<h1><?= $h1; ?></h1>
<ul class="pages-list">
    <?php foreach ($pages as $page): ?>
    <li class="page-item">
        <a href="/page/<?= $page['id']; ?>/"><?= $page['title']; ?></a>
    </li>
    <?php endforeach; ?>
</ul>