<section class="login">
    <div>
        <h1>Trips:</h1>
    </div>
    <div class="flex justify-center w-10%">
        <table class="text-sm text-left rtl:text-right text-gray-500 mb-5">
            <thead class="flex text-xs text-gray-700 uppercase bg-gray-50 rounded-t-[10px]">
                <tr>
                    <th scope="col" class="px-2 py-1">
                        Flight ID
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

                $res = $database->getFlights();

                for ($i = 0; $i < sizeof($res); $i++) {
                    $flightID = $res[$i]["FlightID"];
                    $destination = $res[$i]["Destination"];
                    $departure = $res[$i]["Departure"];
                    $freeSeats = $res[$i]["FreeSeats"];
                    $price = $res[$i]["Price"];
                    $col = qol::getRandomCol();

                    echo "
                        <tr class='bg-$col border-b hover:bg-gray-500 flex justify-center text-white'>
                            <th scope='row' class='px-6 py-4 font-medium whitespace-nowrap'>$flightID</th>
                            <td class='px-6 py-4'>$destination</td>
                            <td class='px-6 py-4'>$departure</td>
                            <td class='px-6 py-4'>$freeSeats</td>
                            <td class='px-6 py-4'>$price</td>
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