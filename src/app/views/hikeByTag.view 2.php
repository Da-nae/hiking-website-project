<ul>
    <?php foreach ($HikesByTag as $hike) : ?>
        <li>
                <span><?= $hike['hike_name'] ?></span>
        </li>
    <?php endforeach; ?>
</ul>