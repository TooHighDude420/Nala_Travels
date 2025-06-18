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

var_dump($res);

$fName = $res[0]["fName"];
$lName = $res[0]["lName"];
$dataEnc = json_encode($data);
?>

<section>
    <div>
        Boek $cat
    </div>
    <?php
    for ($i = 0; $i < $size; $i++) {
        var_dump($i);
        if ($i == 0) {
            echo "
                <div class='bg-gray-200 h-[25vh] w-[80%]'>
                    <form action='assets/php/checkLogin.php?data=$dataEnc' method='post'>
                        <label for='firstName'>Voornaam:</label>
                        <input placeholder='Voornaam' value='$fName' type='text' name='fName' id='fName'>
            
                        <label for='lastName'>Achternaam:</label>
                        <input placeholder='Achternaam' value='$lName' type='text' name='lName' id='lName'>

                        <label for='Departure'>Vertrek</label>
                        <input value='$dep' type='text' name='departure' id='fName' disabled>

                        <label for='Destination'>Besteming</label>
                        <input value='$des' type='text' name='destination' id='fName' disabled>

                        <button type='submit'>boek nu!</button>
                </form>
            </div>
        ";
        } else {
            echo "
                <div class='bg-gray-200 h-[25vh] w-[80%]'>
                    <form action='assets/php/checkLogin.php?data=$dataEnc' method='post'>
                        <label for='firstName'>Voornaam:</label>
                        <input placeholder='Voornaam' type='text' name='fName' id='fName' class=''>
            
                        <label for='lastName'>Achternaam:</label>
                        <input placeholder='Achternaam' type='text' name='lName' id='lName'>

                        <label for='Departure'>Vertrek</label>
                        <input value='$dep' type='text' name='departure' id='fName' disabled>

                        <label for='Destination'>Besteming</label>
                        <input value='$des' type='text' name='destination' id='fName' disabled>

                        <button type='submit'>boek nu!</button>
                </form>
            </div>
        ";
        }
    }

    ?>

</section>