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

$headerArray = ["home", "contact", "overons", "search", "dashboard"];
$footerArray = ["home", "contact", "overons", "search", "login", "register"];

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
    <header class="sticky top-0">
        <?php
        for ($i = 0; $i < sizeof($headerArray); $i++) {
            if ($page == $headerArray[$i]) {
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
        for ($i = 0; $i < sizeof($footerArray); $i++) {
            if ($page == $footerArray[$i]) {
                include "assets/includes/footer.inc.php";
                break;
            }
        }

        ?>
    </footer>
</body>

</html>