<ul>
    <?php foreach ($hikes as $hike) : ?>
        <li>
            <a href="/hike?code=<?= $hike['ID_hikes']; ?>">
                <span><?= $hike['hike_name'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>