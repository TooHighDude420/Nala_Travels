<section>
    <div>
        <h1>Autos:</h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-5">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Car ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Country
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php

                $res = $database->getCars();

                for ($i = 0; $i < sizeof($res); $i++) {
                    $carID = $res[$i]["CarID"];
                    $country = $res[$i]["CountryName"];
                    $price = $res[$i]["Price"];

                    echo "
                        <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600'>
                            <th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>$carID</th>
                            <td class='px-6 py-4'>$country</td>
                            <td class='px-6 py-4'>$price</td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <a class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                            </td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <a class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Delete</a>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>