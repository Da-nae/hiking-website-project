<nav>
    <ul class="flex mt-10 flex-wrap items-center justify-center">
    <?php foreach ($tags as $tag) : ?>
        <li class="mx-5 bg-Laurel-green text-white px-5 py-2 my-1 rounded-xl cursor-pointer">
        <a href="/tag?code=<?= $tag['ID_tags']?>"><?= $tag['tag_name'] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>