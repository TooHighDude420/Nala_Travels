<?php

$res = $database->getReviewsForValidation();

?>

<div class="flex flex-col gap-y-[5vh] flex-wrap items-center">
    <?php
    if(sizeof($res) == 0){
        echo "no reviews";
    }

    foreach ($res as $result) {
        $reviewID = $result['reviewID'];
        $name = $result['name'];
        $subject = $result['subject'];
        $message = $result['message'];
        $valid = $result['valid'];

        echo "
            <div class='bg-gray-300 border-b hover:bg-gray-500 flex flex-col text-white w-[80%]'>
                <p class='px-6 py-4 font-medium whitespace-nowrap'>$reviewID</p>
                <div class='flex'>
                    <p class='px-6 py-4'>$name</p>
                    <p class='px-6 py-4'>$subject</p>
                </div>
                
                <p class='px-6 py-4 max-w-[40%]'>$message</p>

                <div class='flex'>
                    <div id='edit' class='px-6 py-4 text-right'>
                        <a onclick='validate($reviewID)' class='font-medium text-white hover:underline'>validate</a>
                    </div>
                    <div id='delete' class='px-6 py-4 text-right'>
                        <a onclick='deleteRev($reviewID)' class='font-medium text-white'>Delete</a>
                    </div>
                </div>
            </div>
            ";
    }
    ?>
</div>
<script src="assets/js/admin/reviewsAdmin.js"></script>