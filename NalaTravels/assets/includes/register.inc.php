<section class="h-[85vh] login flex flex-col justify-center items-center gap-y-[2vh]">
    <div>
        <a href="index.php?page=home">
            <img src="assets/img/header/logo.png" alt="logo">
        </a>
    </div>

    <div class="bg-[#34A0A4] border-solid border-2 border-black rounded-[50px] h-[60vh] w-[50%] opacity-80">
        <form action="assets/php/register.php" method="post"
            class="h-full w-full flex flex-col justify-around items-center">
            <div>
                <label class="text-white" for="username">Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <label for="passwordRep">Repeat Password</label>
                <input type="password" name="passwordRep" placeholder="Password">
            </div>
            <div>
                <button type="submit">Register!</button>
            </div>
        </form>
    </div>
</section>