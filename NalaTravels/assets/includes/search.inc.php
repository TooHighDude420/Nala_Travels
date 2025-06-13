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
    
    echo "<div class='flex flex-col content-center flex-wrap gap-y-[20px]'>";

    foreach ($trips as $trip) {
        $dep = $trip["Departure"];
        $des = $trip["Destination"];
        $price = $trip["Price"];
        $free = $trip["FreeSeats"];
        $img = $trip["ImageLoc"];

        if ($people != '') {
            $totalPrice = $price * $people;

            $data = [
                $dep,
                $des,
                $totalPrice,
                $free,
                $img,
                $people
            ];

            $json_data = json_encode($data);
        } else {

            $data = [
                $dep,
                $des,
                $price,
                $free,
                $img,
                $people
            ];

            $json_data = json_encode($data);
        }

        echo "
        <form class='p-5 bg-gray-200 h-[25-vh] w-[80%] rounded' action='assets/php/checkLogin.php' method='post'>
            <input name='data' value='$json_data' class='hidden'>
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
                    <div class='flex justify-around'>
                        <button type='submit' class=''>
                            boek nu!
                        </button>";
                        if ($people != '') {
                            echo "<p>€ $totalPrice | $free free seats</p>";
                        } else {
                            echo "<p>€$price p.p | $free free seats</p>";
                        }
                        echo "
                    </div>
                </div>
            </div>
        </form>";
    }

    echo "</div>";
    ?>
</div>