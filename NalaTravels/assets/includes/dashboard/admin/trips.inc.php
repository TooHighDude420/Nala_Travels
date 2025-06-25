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
                        <tr class='bg-$col border-b hover:bg-gray-500 text-white'>
                            <th scope='row' class='px-6 py-4 font-medium whitespace-nowrap'>$tripID</th>
                            <td class='px-6 py-4'>$destination</td>
                            <td class='px-6 py-4'>$departure</td>
                            <td class='px-6 py-4'>$freeSeats</td>
                            <td class='px-6 py-4'>$price</td>
                            <td class='px-6 py-4'>$hotelID</td>
                            <td class='px-6 py-4'>$CarID</td>
                            <td class='px-6 py-4'>$CountryName</td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <a class='font-medium text-white hover:underline'>Edit</a>
                            </td>
                            <td id='delete' class='px-6 py-4 text-right'>
                                <a class='font-medium text-white'>Delete</a>

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
                        <tr class='bg-$col border-b hover:bg-gray-500 text-white'>
                            <th scope='row' class='px-6 py-4 font-medium whitespace-nowrap'>$tripID</th>
                            <td class='px-6 py-4'>$destination</td>
                            <td class='px-6 py-4'>$departure</td>
                            <td class='px-6 py-4'>$freeSeats</td>
                            <td class='px-6 py-4'>$price</td>
                            <td class='px-6 py-4'>$hotelID</td>
                            <td class='px-6 py-4'>$CarID</td>
                            <td class='px-6 py-4'>$CountryName</td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <a class='font-medium text-white hover:underline'>Edit</a>
                            </td>
                            <td id='delete' class='px-6 py-4 text-right'>
                                <a class='font-medium text-white'>Delete</a>

                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>