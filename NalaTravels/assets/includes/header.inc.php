<section>

    <!-- scripts for components -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <?php
    
    if (isset($_GET["page"])){
        $pagep = $_GET["page"];
    } else {
        $pagep = "home";
    }

    if ($pagep == "dashboard" && $_SESSION["role"] == 2) {
        echo /*html*/ '
        <div class="bg-[#1E6091] w-full h-[15vh] flex justify-between">
                <a href="index.php?page=home">
                    <img src="assets/img/header/logo.png" alt="logo" class="size-24 m-2 mt-1">
                </a>
                    <div class="flex">
                        <button type="button" class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh] active">
                            Vluchten
                        </button>
                        <button type="button" class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh]">
                            Verblijven
                        </button>
                        <button type="button" class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh]">
                            Verblijf + Vlucht
                        </button>
                        <button type="button" class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh]">
                            Excursies
                        </button> 
                    </div>
                
                <div class="text-white flex mt-1">
                    <a href="index.php?page=overons" class="mr-5">over ons</a>
                    <a href="index.php?page=login" class="mr-5">login</a>
                </div>
        </div>';
    } else {
        echo /*html*/ '
            <div class="bg-[#1E6091] w-full h-[15vh] flex justify-between">
                <a href="index.php?page=home">
                    <img src="assets/img/header/logo.png" alt="logo" class="size-24 m-2 mt-1">
                </a>

                <div class="flex flex-col justify-around">
                    <div>
                        <div class="boven flex content-center flex-wrap w-[80%]">
                            <div class="flex">
                                <button type="button" id="vluchten" onclick="flightsActive()"
                                    class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh] active">Vluchten</button>
                                <button type="button" id="verblijven" onclick="staysActive()"
                                    class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh]">Verblijven</button>
                                <button type="button" id="verblijfVlucht" onclick="combiActive()"
                                    class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh]">Verblijf
                                    + Vlucht</button>
                                <button type="button" id="excursie" onclick="excursionActive()"
                                    class="text-white bg-[#168AAD] hover:border-white hover:border-2 font-small rounded-[10px] text-xxs text-center me-2 mb-2 w-[35vh]">Excursies</button>
                            </div>
                        </div>
                        <form action="assets/php/search.php" method="post"
                            class="onder bg-[#168AAD] h-[7vh] rounded-[3px] flex justify-evenly content-center flex-wrap">
                            <input type="text" name="departure" id="departure"
                                class="inputFields placeholder:text-center" placeholder="Vertrek">
                            <input type="text" name="arrival" id="arrival" class="inputFields placeholder:text-center"
                                placeholder="Bestemming">
                            <select name="groupSize" id="groupSize" class="inputFields">
                                <option value="def" selected="true" disabled="disabled" class="text-gray-500">Aantal
                                    personen
                                </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5+">5+</option>
                            </select>
                            <div class="relative w-[20%]">
                                <div class="absolute top-[1.3vh] start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker id="default-datepicker" type="text"
                                    class="h-[5vh] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                            <button type="submit">
                                <div
                                    class="bg-[#B5E48C] h-[35px] w-[35px] rounded flex flex-wrap content-center justify-center">
                                    <img src="assets/img/header/search.png" alt="search" class="h-[80%] w-[80%]] allign-center">
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-white flex mt-1">
                    <a href="index.php?page=overons" class="mr-5">over ons</a>
                    <a href="index.php?page=login" class="mr-5">login</a>
                </div>
            </div>
        ';
    }
    ?>
</section>
<script src="assets/js/searchSystem/searchMain.js"></script>