<section class="h-[85vh] login flex flex-col justify-center items-center gap-y-[2vh]">
    <div>
        <a href="index.php?page=home">
            <img src="assets/img/header/logo.png" alt="logo">
        </a>
    </div>

    <div class="bg-col-login bg-[#34A0A4] border-solid border-2 border-black rounded-[50px] h-[50vh] w-[35%] opacity-80">
        <form action="assets/php/register.php" method="post"
            class="h-[40vh] w-full flex flex-col justify-around items-center mt-10">
            <div class="">
                <input type="text" name="username" placeholder=" Username" class="rounded-[5px] h-[4vh] mr-3">
                <input type="text" name="email" placeholder=" Email" class="rounded-[5px] h-[4vh]">
            </div>
            <div>
                <input type="password" name="password" placeholder=" Password" class="rounded-[5px] h-[4vh] mr-3">
                <input type="password" name="passwordRep" placeholder=" Repeat password" class="rounded-[5px] h-[4vh]">
            </div>
            <div>
                <input type="text" name="fName" placeholder=" First name" class="rounded-[5px] h-[4vh] mr-3">
                <input type="text" name="lName" placeholder=" Last name" class="rounded-[5px] h-[4vh]">
            </div>
            <div>
                <button type="submit" class="text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center">Register!</button>
            </div>
        </form>
    </div>
</section>