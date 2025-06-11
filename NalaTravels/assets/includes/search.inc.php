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

    //var_dump($trips);
    
    echo /*html*/ "<div class='flex flex-col content-center flex-wrap gap-y-[20px]'>";

    foreach ($trips as $trip) {
        $dep = $trip["Departure"];
        $des = $trip["Destination"];
        $price = $trip["Price"];
        $free = $trip["FreeSeats"];
        $img = $trip["ImageLoc"];

        echo /*html*/ "
        <div class='p-5 bg-gray-200 h-[25-vh] w-[80%] rounded'>
            <div class='flex'>
                <div>
                    <img class='rounded h-[20vh] w-full' src='assets/img/cards/$img' alt='$img'>
                </div>
                <div class='flex flex-col w-full flex-wrap justify-between'>
                    <div class='flex content-center items-center justify-center w-full h-[80%]'>
                        <p>$dep</p>
                            <img src='assets/img/tickets/travel.svg' alt='arrow' class='h-[10vh] w-[20%]'>
                        <p>$des</p>
                    </div>
                    <div class='flex justify-end'>";
                        if($people != ''){
                            echo "<p>€" . $price * $people . " " . "| $free free seats</p>";    
                        } else {
                            echo "<p>€$price p.p | $free free seats</p>";
                        }
                        echo /*html*/ "
                    </div>
                </div>
            </div>
        </div>";
    }

    echo "</div>";
    ?>
</div>