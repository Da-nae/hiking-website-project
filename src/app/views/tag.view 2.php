<nav>
    <ul>
    <?php foreach ($tags as $tag) : ?>
        <li>
            <a href="/tag?code=<?= $tag['ID_tags']?>"><?= $tag['tag_name'] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>