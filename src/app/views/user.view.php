<h1 class="text-center text-[45px] mt-16 font-bold">My account</h1>
<div class="flex flex-col items-left w-[70%] m-auto ml-5 max-w-[600px] mb-7 border-2 border-Old-mauve shadow-lg py-8 pt-10 mt-2 rounded justify-center">
    <p class="text-lg text-Tomato">Username:</p>
    <p> <?= $_SESSION['user']['username']; ?></p>
    <p class="text-lg text-Tomato">Firstname:</p>
    <p> <?= $_SESSION['user']['firstname']; ?></p>
    <p class="text-lg text-Tomato">Lastname:</p>
    <p> <?= $_SESSION['user']['lastname']; ?></p>
    <p class="text-lg text-Tomato">Email:</p>
    <p> <?= $_SESSION['user']['email']; ?></p>
</div>