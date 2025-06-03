<!DOCTYPE html>
<html lang="en">

<?php
require("assets/php/database.php");

$database = new Database();


isset($_SESSION) ?: session_start();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nala Travels</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Julius+Sans+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="julius-sans-one-regular">
    <header  class="sticky top-0">
        <?php
        $array = ["home", "contact", "overons", "search"];

        for ($i = 0; $i < sizeof($array); $i++) {
            if ($page == $array[$i]) {
                include "assets/includes/header.inc.php";
                break;
            }
        }
        ?>

    </header>

    <main class="">
        <?php
        include "assets/includes/$page.inc.php";
        ?>
    </main>

    <footer class="sticky bottom-0 w-full">
        <?php
        include "assets/includes/footer.inc.php";
        ?>
    </footer>
</body>

</html>