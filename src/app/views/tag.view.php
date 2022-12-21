<nav>
    <ul class="flex mt-10 flex-wrap">
    <?php foreach ($tags as $tag) : ?>
        <li class="mx-5 bg-Laurel-green text-white px-5 py-2 rounded-xl cursor-pointer">
            <span><?= $tag['tag_name'] ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>