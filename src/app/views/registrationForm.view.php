<div class="flex flex-col items-center w-full">
    <h1 class="text-center text-[45px] mt-16 font-bold">Registration</h1>
    <div class="w-[70%] m-auto max-w-[600px] mb-7">
        <form action="/registration" method="post" class="border-2 border-Old-mauve shadow-lg py-8 pt-10 mt-2 rounded flex flex-col items-center justify-center">
            <div class="flex flex-col w-[80%]">
                <label for="nickname">Nickname :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="text" name="nickname" id="nickname">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="firstname">Firstname :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="text" name="firstname" id="firstname">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="lastname">Lastname :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="text" name="lastname" id="lastname">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="email">E-mail :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="email" name="email" id="email">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="password">Password :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="password" name="password" id="password">
            </div>
            <button type="submit" class="bg-Tomato mt-10 px-8 py-2 rounded-md hover:bg-red-400 text-white">Submit</button>
        </form>
    </div>
</div>