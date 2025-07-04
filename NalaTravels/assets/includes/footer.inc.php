<section>
    <div class="bg-[#1E6091] w-full h-[15vh] flex justify-between">
        <div class="flex items-center ml-4">
            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-2 text-sm font-bold text-white dark:text-white">
                <?php
                    $stars = $database->getStarData();
                    $num = sizeof($stars);

                    $rat = 0;

                    foreach($stars as $star){
                        $rat += (int)$star['stars'];
                    }

                    $avr = $rat/$num;

                    echo "$avr";
                ?>
            </p>
            <span class="w-1.5 h-1.5 mx-1.5 bg-white rounded-full"></span>
            <a href="index.php?page=review" class="text-sm font-medium text-white underline hover:no-underline">
                <?php
                    echo $num;
                ?>
                reviews
            </a>
        </div>
        <div class="w-100 p-4 flex items-center flex-col">
            <span class="text-sm text-white">© 2025 <a href="https://flowbite.com/"
                    class="hover:underline">NalaTravels™</a>. All Rights Reserved.
            </span>
            <ul class="flex mt-1 text-sm font-thin text-white ">
                <li>
                    <a href="index.php?page=overons" class="hover:underline me-4">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4">Privacy Policy</a>
                </li>
                <li>
                    <a href="index.php?page=overons" class="hover:underline me-4">Licensing</a>
                </li>
                <li>
                    <a href="index.php?page=contact" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</section>