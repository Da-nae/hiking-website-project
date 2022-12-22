<article class="border-2 border-Old-mauve shadow-lg flex flex-col items-center justify-center text-center py-5 px-5 rounded-lg my-10 max-w-[600px] w-[90%] mx-auto">
    <h1 class="mb-10 text-2xl text-center px-1"><?= $hike['hike_name'] ?></h1>
    <div class="w-full flex flex-col justify-between mb-7">
        <div class="flex justify-between pb-7 px-10">
            <p class="bg-gray-100 text-gray-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-Rich-black dark:text-gray-300">
                <svg class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                </svg>
                <?= $hike['distance'] ?>km
            </p>
            <p class="bg-gray-100 text-gray-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-Rich-black dark:text-gray-300"><svg aria-hidden="true" class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg><?= $hike['duration'] ?></p>
            <p class="bg-gray-100 text-gray-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-Rich-black dark:text-gray-300">
                <svg class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
                <?= $hike['elevation_gain'] ?>m
            </p>
        </div>
        <p><?= $hike['description'] ?></p>
        <ul class="flex mt-10 flex-wrap items-center justify-center">
            <?php foreach ($TagsOfHike as $tag) : ?>
                <li class="mx-5 bg-Laurel-green text-white px-5 py-2 my-1 rounded-xl cursor-pointer">
                    <a href="/tag?code=<?= $tag['ID_tags'] ?>"><?= $tag['tag_name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</article>