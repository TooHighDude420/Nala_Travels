<section>
    <div class="gap-y-[2vh] flex flex-col">
        <?php
        $usrData = $database->getDataFromUser($_SESSION['username']);


        $bookings = $database->getBookings($usrData[0]['UserID']);

        $i = 0;

        foreach ($bookings as $booking) {
            $bookNum = array_keys($bookings)[$i] + 1;
            $ttID = $booking["Trips_TravelersID"];
            $des = $booking["Destination"];
            $dep = $booking["Departure"];
            $fName = $booking["Fname"];
            $lName = $booking["Lname"];

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
                    <button onclick='deleteBooking($ttID)'>
                        cancel!
                    </button>
                </div>
            ";

            $i++;
        }

        ?>
    </div>
</section>
<script src="assets/js/modules/ajax.js"></script>
<script src="assets/js/modules/transform.js"></script>
<script src="assets/js/bookings/deleteBooking.js"></script>