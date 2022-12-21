<ul class="grid grid-cols-4 gap-x-10 mt-10">
    <?php foreach ($hikes as $hike) : ?>
        <li class="bg-white flex flex-col items-center justify-between py-5 rounded-lg">
            <h1 class="mb-10 text-2xl text-center"><?= $hike['hike_name'] ?></h1>
            <div class="w-full flex justify-between mb-10 mx-10">
                <p><?= $hike['distance'] ?>km</p>
                <p><?= $hike['duration'] ?></p>
            </div>
            <a class=" px-8 py-2 rounded-lg bg-Tomato" href="/hikes.php?code=<?= $hike['ID_hikes']; ?>">See more</a>
        </li>
    <?php endforeach; ?>
</ul>