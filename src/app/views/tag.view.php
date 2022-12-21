<nav>
    <ul>
    <?php foreach ($tags as $tag) : ?>
        <li>
            <span><?= $tag['tag_name'] ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>