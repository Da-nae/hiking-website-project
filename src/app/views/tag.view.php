<nav>
    <ul class="flex mt-10 flex-wrap">
    <?php foreach ($tags as $tag) : ?>
        <li class="mx-5 bg-Laurel-green text-white px-5 py-2 rounded-xl cursor-pointer">
        <a href="/tag?code=<?= $tag['ID_tags']?>"><?= $tag['tag_name'] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>