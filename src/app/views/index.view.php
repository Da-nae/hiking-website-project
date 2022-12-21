<ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-10 mt-10 mx-10">
    <?php foreach ($hikes as $hike) : ?>
        <li class="border-2 border-Old-mauve shadow-lg flex flex-col items-center justify-between py-5 rounded-lg">
            <h1 class="mb-10 text-2xl text-center"><?= $hike['hike_name'] ?></h1>
            <div class="w-full flex justify-between mb-10">
                <p class="ml-10"><?= $hike['distance'] ?>km</p>
                <p class="mr-10"><?= $hike['duration'] ?></p>
            </div>
            <a class=" px-8 py-2  rounded-lg border-2 text-Tomato border-Tomato hover:bg-Tomato hover:text-white transition-all" href="/hikes.php?code=<?= $hike['ID_hikes']; ?>">See more</a>
        </li>
    <?php endforeach; ?>
</ul>