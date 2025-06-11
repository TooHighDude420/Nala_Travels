<?php
$username = $_SESSION['username'];
?>

<section class="">
    <div class="flex flex-col content-center flex-wrap gap-y-2">
        <h1 class="text-[40px] font-bold">Welkom <?php echo $username ?></h1>

        <div class="bg-gray-300 w-[80%]">
            <p class="font-bold">Notificaties:</p>
        </div>

        <div class="bg-gray-300 w-[80%]">
            <p class="font-bold">Aankomende Boekingen:</p>
        </div>
    </div>
</section>