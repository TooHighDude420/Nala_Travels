<section class="login">
    <div>
        <h1>all Trips:</h1>
    </div>
    <div class="flex justify-center w-10%">
        <table class="text-sm text-left text-gray-500 mb-5 w-[80%]">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-2 py-1">
                        TripID
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Destination
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Departure
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Free seats
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Price
                    </th>
                    <th scope="col" class="px-2 py-1">
                        HotelID
                    </th>
                    <th scope="col" class="px-2 py-1">
                        CarID
                    </th>
                    <th scope="col" class="px-2 py-1">
                        CountryName
                    </th>
                    <th scope="col" class="px-10 py-3 text-white">
                        Edit
                    </th>
                    <th scope="col" class="px-10 py-3 text-white">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <?php

                $res = $database->getTrips();

                for ($i = 0; $i < sizeof($res); $i++) {
                    $tripID = $res[$i]["tripID"];
                    $destination = $res[$i]["Destination"];
                    $departure = $res[$i]["Departure"];
                    $freeSeats = $res[$i]["FreeSeats"];
                    $price = $res[$i]["Price"];
                    $hotelID = $res[$i]["HotelID"];
                    $CarID = $res[$i]["CarID"];
                    $CountryName = $res[$i]["CountryName"];

                    $col = qol::getRandomCol();



                    echo "
                        <tr class='bg-$col border-b hover:bg-gray-500 text-white' id='alltrips$tripID'>
                            <th id='tripid' scope='row' class='px-6 py-4 font-medium whitespace-nowrap'>$tripID</th>
                            <td id='destination' class='px-6 py-4'>$destination</td>
                            <td id='departure' class='px-6 py-4'>$departure</td>
                            <td id='freeseats'class='px-6 py-4'>$freeSeats</td>
                            <td id='price' class='px-6 py-4'>$price</td>
                            <td id='hotelid' class='px-6 py-4'>$hotelID</td>
                            <td id='carid' class='px-6 py-4'>$CarID</td>
                            <td id='countryname' class='px-6 py-4'>$CountryName</td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <button onclick='editTrip($tripID)' class='font-medium text-white hover:underline' id='alledit$tripID'>Edit</button>
                            </td>
                            <td id='delete' class='px-6 py-4 text-right'>
                                <button onclick='deleteTrip($tripID)' class='font-medium text-white'>Delete</button>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div>
        <h1>geboekte Trips:</h1>
    </div>
    <div class="flex justify-center w-10%">
        <table class="text-sm text-left text-gray-500 mb-5 w-[80%]">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-2 py-1">
                        Trips_TravelersID
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Destination
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Departure
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Fname
                    </th>
                    <th scope="col" class="px-2 py-1">
                        Lname
                    </th>
                    <th scope="col" class="px-2 py-1">
                        CarID
                    </th>
                    <th scope="col" class="px-2 py-1">
                        HotelID
                    </th>
                    <th scope="col" class="px-10 py-3 text-white">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <?php

                $res = $database->getBookedTrips();

                for ($i = 0; $i < sizeof($res); $i++) {
                    $Trips_TravelersID = $res[$i]["Trips_TravelersID"];
                    $destination = $res[$i]["Destination"];
                    $departure = $res[$i]["Departure"];
                    $Fname = $res[$i]["Fname"];
                    $Lname = $res[$i]["Lname"];
                    $CarID = $res[$i]["CarID"];
                    $HotelID = $res[$i]["HotelID"];

                    $col = qol::getRandomCol();

                    echo "
                        <tr class='bg-$col border-b hover:bg-gray-500 text-white' id='booked$Trips_TravelersID'>
                            <th id='Trips_TravelersID' scope='row' class='px-6 py-4 font-medium whitespace-nowrap'>$Trips_TravelersID</th>
                            <td id='destination' class='px-6 py-4'>$destination</td>
                            <td id='departure' class='px-6 py-4'>$departure</td>
                            <td id='Fname'class='px-6 py-4'>$Fname</td>
                            <td id='Lname' class='px-6 py-4'>$Lname</td>
                            <td id='CarID' class='px-6 py-4'>$CarID</td>
                            <td id='HotelID' class='px-6 py-4'>$HotelID</td>
                            <td id='delete' class='px-6 py-4 text-right'>
                                <button onclick='deleteBooking($Trips_TravelersID)' class='font-medium text-white'>Delete</button>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
            <button onclick="delete()"></button>
        </table>
    </div>
</section>
<script src="assets/js/modules/ajax.js"></script>
<script src="assets/js/modules/transform.js"></script>
<script src="assets/js/adminSystem.js"></script>