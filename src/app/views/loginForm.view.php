
<h1 class="text-center text-[45px] mt-16 font-bold">Login</h1>
<form class="flex flex-col items-center w-[70%] m-auto max-w-[600px] mb-7 border-2 border-Old-mauve shadow-lg py-8 pt-10 mt-2 rounded justify-center" action="/registration" method="post">
    <div class="flex flex-col w-[80%]">
        <label for="username">Username :</label>
        <input class="my-2 p-1 rounded mb-8 border-2" type="text" name="username" id="username">
    </div>
    <div class="flex flex-col w-[80%]">
        <label for="password">Password :</label>
        <input class="my-2 p-1 rounded mb-8 border-2" type="password" name="password" id="password">
    </div>
    <button class="bg-Tomato mt-10 px-8 py-2 rounded-md hover:bg-red-400 text-white" type="submit">Connect</button>
</form>