<?php
    $usrData = $database->getDataFromUser($_SESSION['username']);
    $Username = $usrData[0]['Username'];
    $fName = $usrData[0]['fName'];
    $lName = $usrData[0]['lName'];
    $email = $usrData[0]['email'];
?>
<section>
    <section class="h-[90vh] flex flex-col justify-center items-center gap-y-[2vh]">
        <div class="bg-col-login border-solid border-2 border-black rounded-[50px] h-[60vh] w-[40%]">
            <form action="assets/php/register.php" method="post"
                class="h-full w-full flex flex-col justify-around items-center">
                <?php
                    echo "
                        <div class='text-white text-5xl'>
                            <p>$Username</p>
                        </div>
                        <div>
                            <input type='text' name='username' value='$Username' class='rounded-[5px] h-[4vh] mr-3'>
                            <input type='text' name='email' value='$email' class='rounded-[5px] h-[4vh]'>
                        </div>
                        <div>
                            <input type='text' name='fName' value='$fName' class='rounded-[5px] h-[4vh] mr-3'>
                            <input type='text' name='lName' value='$lName' class='rounded-[5px] h-[4vh]'>
                        </div>
                        <div>
                            <button type='submit'
                                class='text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center'>Back</button>
                            <button type='submit'
                                class='text-white bg-black w-[13vh] h-[5vh] rounded-[5px] text-center content-center'>Register!</button>
                        </div>
                    ";
                ?>
            </form>
        </div>
    </section>
</section>