<section>
    <div class="gap-y-[2vh] flex flex-col">
        <?php
        $usrData = $database->getDataFromUser($_SESSION['username']);

    
        $bookings = $database->getUserRelBookings($usrData[0]['UserID']);
        
        $i = 0;
        
        foreach($bookings as $booking){
            $bookNum = array_keys($bookings)[$i] + 1;
            $fName = $booking[0];
            $lName = $booking[1];
            $des = $booking[2];
            $dep = $booking[3];
            $dt = $booking[4];

            echo "
                <div class='bg-gray-300'>
                    <div>
                        booking: $bookNum
                    </div>
                    <div>
                        $fName $lName
                    </div>
                    <div>
                        $dep $des
                    </div>
                    <div>
                        $dt
                    </div>
                </div>
            ";

            $i++;
        }

        ?>
    </div>
</section>