<?php
$size = $_GET["s"];
$dep = $_GET["dep"];
$des = $_GET["des"];

if (isset($_SESSION)) {
    // $_SESSION["username"];
} else {
    session_start();
    header("location: index.php?page=login");
}

$data = [
    $size,
    $dep,
    $des
];

$res = $database->getDataFromUser("toohighdude");

$fName = $res[0]["fName"];
$lName = $res[0]["lName"];
$dataEnc = json_encode($data);
?>

<section class="login text-white h-fit flex flex-col gap-y-[50px] pt-[55px]">
    <?php
    for ($i = 0; $i < $size; $i++) {
        $colArray = [
            "[#D9ED92]",
            "[#B5E48C]",
            "[#99D98C]",
            "[#76CB93]",
            "[#52B69A]"
        ];
        if ($i == 0) {
            echo "
            <div class='flex justify-center gap-x-[50px]'>
                    <div class='bg-$colArray[$i] h-[22vh] w-[40%] rounded-[10px]'>
                        <form action='assets/php/bookFlight.php?data=$dataEnc' method='post' class='mt-5'>
                            <label for='firstName' class='ml-[15px]'>Voornaam:</label>
                            <input placeholder=' Voornaam' value=' $fName' type='text' name='fName' id='fName' class='text-gray-600 w-[25%] rounded-[8px]'>
                
                            <label for='lastName'>Achternaam:</label>
                            <input placeholder=' Achternaam' value=' $lName' type='text' name='lName' id='lName' class='text-gray-600 mt-3 w-[25%] rounded-[8px]'>


                            <label for='Departure' class='ml-[15px]'>Vertrek</label>
                            <input value=' $dep' type='text' name='departure' id='fName' disabled class='w-[10%] mt-[20px] rounded-[8px] mr-[200px]'>

                            <label for='Destination'>Besteming</label>
                            <input value=' $des' type='text' name='destination' id='fName' disabled class='w-[10%] rounded-[8px]'>    
                    </form>
                </div>
        ";
        } else {
            if ($i == 2) {
                echo "<div class='flex justify-center gap-x-[50px]'>";
            } else if ($i == 4) {
                echo "<div class='flex w-full justify-center'>";
            }
            echo "
                <div class='bg-$colArray[$i] h-[22vh] w-[40%] flex justify-center rounded-[10px]'>
                    <form action='assets/php/bookFlight.php?data=$dataEnc' method='post' class='mt-5'>
                        <label for='firstName' class='ml-[15px]'>Voornaam:</label>
                        <input placeholder=' Voornaam' type='text' name='fName' id='fName' class='w-[25%] text-gray-600 rounded-[8px]'>
            
                        <label for='lastName'>Achternaam:</label>
                        <input placeholder=' Achternaam' type='text' name='lName' id='lName' class='text-gray-600 mt-3 w-[25%] rounded-[8px]'>

                        <label for='Departure' class='ml-[15px]'>Vertrek</label>
                        <input value=' $dep' type='text' name='departure' id='fName' disabled class='w-[10%] mt-[20px] rounded-[8px] mr-[200px]'>

                        <label for='Destination'>Besteming</label>
                        <input value=' $des' type='text' name='destination' id='fName' disabled class='w-[10%] rounded-[8px]'>
                </form>
            </div>";
            if ($i == 1 || $i == 3 || $i == 4) {
                echo "</div>";
            }

        }

    }
    ?>

    <div class="flex justify-center">
        <a href="index.php?page=home"
            class="text-white bg-black w-[15vh] h-[5vh] rounded-[5px] text-center content-center mr-10 mb-10">Go back</a>
        <button type="submit" class="text-white bg-black w-[20vh] h-[5vh] rounded-[5px]">Book now!</button>
    </div>

</section>