<section class="h-[85vh] login flex flex-col justify-center items-center gap-y-[2vh]">
    <div>
        <a href="index.php?page=home">
            <img src="assets/img/header/logo.png" alt="logo">
        </a>
    </div>

    <div class="bg-[#34A0A4] border-solid border-2 border-black rounded-[50px] h-[60vh] w-[50%] opacity-80">
        <form action="assets/php/login.php" method="post"
            class="h-full w-full flex flex-col justify-around items-center">
            <div>
                <p>Aanmelden</p>
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <button type="submit">Login!</button>
                <a href="index.php?page=register">Register</a>
            </div>
        </form>
    </div>
</section>