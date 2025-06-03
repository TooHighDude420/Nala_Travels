<?php
$departure = $_GET["d"];
$destination = $_GET["a"];
$people = $_GET["p"];
?>

<div>
    <p><?php echo "search results for DEP: $departure DES:$destination GRP:$people" ?></p>
    <?php

    $trips = $database->search($departure, $destination, $people);

    var_dump($trips);

    echo "<div class='p-5 h-[25-vh] w-[50%] bg-gray-200' rounded>";

    foreach ($trips as $trip) {
        $dep = $trip["Departure"];
        $des = $trip["Destination"];
        $price = $trip["Price"];
        $free = $trip["FreeSeats"];

        echo "
        <div class='flex flex-col flex-wrap'>
            <div class='flex content-center items-center justify-center'>
                <p>$dep</p>
                <img src='assets/img/tickets/travel.svg' alt='arrow' class='h-[10vh] w-[20%]'>
                <p>$des</p>
            </div>

            <div class='flex justify-end'>
                <p>$price | $free</p>
            </div>
            
        </div>
        ";
    }

    echo "</div>";
    ?>
</div>