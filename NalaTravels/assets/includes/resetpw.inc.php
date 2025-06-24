<?php
    $userID = $_GET['id'];
?>

<section class="h-[100vh] login flex flex-col justify-center items-center gap-y-[2vh]">
    <div>
        <a href="index.php?page=home">
            <img src="assets/img/header/logo.png" alt="logo">
        </a>
    </div>

    <div class="bg-col-login border-solid border-2 border-black rounded-[50px] h-[60vh] w-[40%]">
        <form action="assets/php/changePass.php" method="post"
            class="h-full w-full flex flex-col justify-around items-center">
            <div class="text-white text-5xl">
                <p>wachtwoord reset</p>
            </div>
            <div class="">
                <input type="password" name="password" placeholder=" wachtwoord" class="rounded-[5px] h-[4vh] mr-3">
                <input type="password" name="passwordRep" placeholder=" herhaal wachtwoord" class="rounded-[5px] h-[4vh]">
                <?php
                    echo "<input type='hidden' name='id' value='$userID'>";
                ?>
            </div>
            <div>
                <button type="submit"
                    class="text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center">Back</button>
                <button type="submit"
                    class="text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center">Reset!</button>

            </div>
        </form>
    </div>
</section>