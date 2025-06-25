<section class="h-[100vh] login flex flex-col justify-center items-center gap-y-[2vh]">
    <div>
        <a href="index.php?page=home">
            <img src="assets/img/header/logo.png" alt="logo">
        </a>
    </div>

    <div class="bg-col-login border-solid border-2 border-black rounded-[50px] h-[60vh] w-[40%]">
        <form action="assets/php/validateReset.php" method="post"
            class="h-full w-full flex flex-col justify-around items-center">
            <div class="text-white text-5xl">
                <p>Wachtwoord Reset</p>
            </div>
            <div class="">
                <input type="text" name="username" placeholder=" Username" class="rounded-[5px] h-[4vh] mr-3">
                <input type="text" name="email" placeholder=" Email" class="rounded-[5px] h-[4vh]">
            </div>
            <div>
                <input type="text" name="fName" placeholder=" First name" class="rounded-[5px] h-[4vh] mr-3">
                <input type="text" name="lName" placeholder=" Last name" class="rounded-[5px] h-[4vh]">
            </div>
            <div>
                <a href="index.php?page=login"
                    class="text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center">
                    Back
                </a>
                <button type="submit"
                    class="text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center">Reset!</button>

            </div>
        </form>
    </div>
</section>