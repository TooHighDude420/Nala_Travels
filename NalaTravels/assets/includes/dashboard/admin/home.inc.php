<?php
isset($_SESSION) ? : session_start();

if (isset($_SESSION["username"])){
    $un = $_SESSION["username"];
}

echo "
<div class='login flex justify-center items-center h-[85vh] text-5xl text-[#52B69A] font-bold'>
    <p>welkom op het dashboard $un</p>
</div>";
?>