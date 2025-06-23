<?php
if (isset($_GET["data"])) {
    $dataDec = json_decode($_GET["data"]);
    if (is_object($dataDec)) {
        $tripId = $dataDec->tripID;
        $free = $dataDec->FreeSeats;
        $price = $dataDec->price;
        $name = $dataDec->CountryName;
        $des = $dataDec->destination;
        $dep = $dataDec->departure;
    } else {
        $dep = $dataDec[0];
        $des = $dataDec[1];
        $price = $dataDec[2];
        $free = $dataDec[3];
        $size = $dataDec[5];
    }
}

if (isset($_SESSION)) {
    // $_SESSION["username"];
} else {
    session_start();
    header("location: index.php?page=login");
}

if (isset($size)) {
    $data = [
        $size,
        $dep,
        $des
    ];
} else {
    $data = [
        $dep,
        $des
    ];
}


$res = $database->getDataFromUser("toohighdude");

$fName = $res[0]["fName"];
$lName = $res[0]["lName"];
$userID = $res[0]["UserID"];

$dataEnc = json_encode($data);
?>

<section class="login text-white h-fit flex flex-col gap-y-[50px] pt-[55px]">
    <div class='flex flex-col content-center flex-wrap justify-center gap-x-[50px] gap-y-[5vh]'>
        <?php
        if (!isset($size)) {
            echo "
                <div id='root' class='grid grid-cols-2 justify-items-center gap-y-[5vh]'>
                    <book-ticket class='block w-[80%]' id='def' w='80%' data='$dataEnc' fName='$fName' lName='$lName' dep='$dep' des='$des' index='0' userID='$userID' color='[#D9ED92]'></book-ticket>
                </div>
                ";
        } else {
            for ($i = 0; $i < $size; $i++) {
                $colArray = [
                    "[#D9ED92]",
                    "[#B5E48C]",
                    "[#99D98C]",
                    "[#76CB93]",
                    "[#52B69A]"
                ];
                if ($i == 0) {
                    $col = $colArray[$i];

                    echo "
                        <div class='flex justify-around w-[100%]'>
                            <book-ticket class='block w-[40%]' w='80%' data='$dataEnc' fName='$fName' lName='$lName' index='$i' dep='$dep' des='$des' userID='$userID' color='$col'></book-ticket>
                    ";
                } else {
                    if ($i == 2) {
                        echo "<div class='flex justify-around w-[100%]'>";
                    } else if ($i == 4) {
                        echo "<div class='flex w-full justify-center'>";
                    }

                    $col = $colArray[$i];

                    echo "
                        <book-ticket class='block w-[40%]' w='80%' data='$dataEnc' dep='$dep' des='$des' color='$col' index='$i' userID='$userID'></book-ticket>
                        ";
                    if ($i == 1 || $i == 3 || $i == 4) {
                        echo "</div>";
                    }

                }

            }


        }

        echo '
                <div class="flex justify-center sticky bottom-0 mt-5">
                    <a href="index.php?page=home" class="text-white bg-black w-[15vh] h-[5vh] rounded-[5px] text-center content-center mr-10 mb-10">Go back</a>
                    <button type="submit" onclick="collect()" class="text-white bg-black w-[20vh] h-[5vh] rounded-[5px]">Book now!</button>
            ';

        if (!isset($size)) {
            echo '
                    <button id="add" class="text-white bg-black w-[20vh] h-[5vh] rounded-[5px] ml-10" type="submit">
                        Add
                    </button>
                </div>
            ';
        } else {
            echo '</div>';
        }

        ?>
    </div>
    <script src="assets/js/ticketSystem/ticketSystem.js"></script>
</section>