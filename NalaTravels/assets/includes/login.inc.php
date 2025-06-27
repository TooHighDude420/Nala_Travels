<section class="h-[100vh] login flex flex-col justify-center items-center gap-y-[2vh]">
    <div>
        <a href="index.php?page=home">
            <img src="assets/img/header/logo.png" alt="logo">
        </a>
    </div>

    <div class="bg-col-login border-solid border-2 border-black rounded-[50px] h-[60vh] w-[40%]">
        <form action="assets/php/login.php" method="post"
            class="h-full w-full flex flex-col justify-around items-center">
            <div class="text-white text-5xl">
                <p>Login</p>
            </div>
            <div>
                <label class="text-white text-xl" for="username">Username:</label>
                <input type="text" name="username" placeholder=" Username" class="rounded-[5px]">
            </div>
            <div>
                <label class="text-white text-xl" for="password">Password:</label>
                <input type="password" name="password" placeholder=" Password" class="rounded-[5px]">
            </div>
            <div class="flex justify-evenly w-[80%]">
                <button type="submit" class="text-white bg-black w-[15%] h-[5vh] rounded-[5px]">Login</button>
                <a href="index.php?page=reset"
                    class="text-white bg-black w-[55%] h-[5vh] rounded-[5px] text-center content-center">Wachtwoord
                    vergeten</a>
                <a href="index.php?page=register"
                    class="text-white bg-black w-[20%] h-[5vh] rounded-[5px] text-center content-center">Register</a>


            </div>
        </form>
    </div>
</section>