<?php
$departure = $_GET["d"];
$destination = $_GET["a"];
$people = $_GET["p"];
$date = $_GET["dt"];
?>

<div>
    <p>
        <?php
            echo "search results for DEP: $departure DES:$destination GRP:$people Date:$date"
        ?>
    </p>

    <?php

    $trips = $database->search($departure, $destination, $people);

    var_dump($trips);

    echo "<div class='p-5 h-[25-vh] w-[50%] bg-gray-200' rounded>";

    foreach ($trips as $trip) {
        $dep = $trip["Departure"];
        $des = $trip["Destination"];
        $price = $trip["Price"];
        $free = $trip["FreeSeats"];
        $img = $trip["ImageLoc"];

        echo "
        <div class='flex flex-col flex-wrap'>
            <div>
                <img src='assets/img/cards/$img' alt='$img'>
            </div>
            <div class='flex content-center items-center justify-center'>
                <p>$dep</p>
                <img src='assets/img/tickets/travel.svg' alt='arrow' class='h-[10vh] w-[20%]'>
                <p>$des</p>
            </div>

            <div class='flex justify-end'>
                <p>€$price p.p | $free free seats</p>
            </div>
            
        </div>
        ";
    }

    echo "</div>";
    ?>
</div>