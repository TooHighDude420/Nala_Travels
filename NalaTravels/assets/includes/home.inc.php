<section class="h-[80vh]">
    <div id="locationsHolder" class="pt-[20px] pl-[20px]">
        <h1>Uitgelichte Locaties</h1>
        <div id="cardHolder" class="flex gap-x-[5%] justify-center pl-[0px]">
            <div class="mt-12">
                <img onclick="test.nextCard()" src="assets/img/cards/ArrowLeft.png" alt="LeftArrow">
            </div>

            <div id="leftCardEnt" class="h-[20vh] w-[15%]">
                <div id="leftHeader"
                    class="h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="leftTitle"></h1>
                </div>
                <div id="leftContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="leftImage" src="" alt="" class="h-full w-full">
                    </div>
                    <div class="flex justify-between">
                        <p id="leftPrice"></p>
                        <button>boek nu!</button>
                    </div>
                </div>
            </div>

            <div id="centerCardEnt" class="h-[25vh] w-[15%]">
                <div id="middleHeader"
                    class="h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="centerTitle"></h1>
                </div>
                <div id="middleContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="centerImage" src="" alt="" class="h-full w-full">
                    </div>
                    <div class="flex justify-between">
                        <p id="centerPrice"></p>
                        <button>boek nu!</button>
                    </div>
                </div>
            </div>



            <div id="rightCardEnt" class="h-[25vh] w-[15%]">
                <div id="rightHeader"
                    class="h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="rightTitle"></h1>
                </div>
                <div id="rightContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="rightImage" src="" alt="" class="h-full w-full">
                    </div>
                    <div class="flex justify-between">
                        <p id="rightPrice"></p>
                        <button>boek nu!</button>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <img onclick="test.prevCard()" src="assets/img/cards/ArrowRight.png" alt="RightArrow">
            </div>
        </div>
    </div>

    <div id="dealsHolder" class="pt-[20px] pl-[20px]">
        <h1>Uitgelichte deals</h1>
        <div id="dealCardHolder" class="flex gap-x-[5%] justify-center pl-[0px]">
            <div  class="mt-12">
                <img onclick="testDeals.nextCard()" src="assets/img/cards/ArrowLeft.png" alt="LeftArrow">
            </div>

            <div id="dealLeftCardEnt" class="h-[20vh] w-[15%]">
                <div id="dealLeftHeader"
                    class="bg-[#76C893] h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="dealLeftTitle"></h1>
                </div>
                <div id="dealLeftContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="dealLeftImage" src="" alt="" class="h-full w-full">
                    </div>
                    <div class="flex justify-between">
                        <p id="leftDealPrice"></p>
                        <button>boek nu!</button>
                    </div>
                </div>
            </div>

            <div id="dealCenterCardEnt" class="h-[25vh] w-[15%]">
                <div id="dealCenterHeader"
                    class="bg-[#52B69A] h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="dealCenterTitle"></h1>
                </div>
                <div id="middleContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="dealCenterImage" src="" alt="" class="h-full w-full">
                    </div>
                    <div class="flex justify-between">
                        <p id="centerDealPrice"></p>
                        <button>boek nu!</button>
                    </div>
                </div>
            </div>



            <div id="dealRightCardEnt" class="h-[25vh] w-[15%]">
                <div id="dealRightHeader"
                    class="bg-[#99D98C] h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="dealRightTitle"></h1>
                </div>
                <div id="dealRightContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="dealRightImage" src="" alt="" class="h-full w-full">
                    </div>
                    <div class="flex justify-between">
                        <p id="rightDealPrice"></p>
                        <button>boek nu!</button>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <img onclick="testDeals.prevCard()" src="assets/img/cards/ArrowRight.png" alt="RightArrow">
            </div>
        </div>
    </div>

    <link rel="preload" href="./assets/img/cards/Indonesie.png" as="image">
    <link rel="preload" href="./assets/img/cards/Servie.png" as="image">
    <link rel="preload" href="./assets/img/cards/Spanje.png" as="image">


    <script src="assets/js/carrousel/Card.js"></script>
    <script src="assets/js/carrousel/Carrousel.js"></script>
    <script src="assets/js/carrousel/myWork.js"></script>
    <script>
        const test = new CarrMain(
            ["leftCardEnt", "leftTitle", "leftImage", "leftHeader", "leftPrice"],
            ["centerCardEnt", "centerTitle", "centerImage", "middleHeader", "centerPrice"],
            ["rightCardEnt", "rightTitle", "rightImage", "rightHeader", "rightPrice"]
        );

        test.grabData("././assets/php/ajax/cardDataAjax.php");

        const testDeals = new CarrMain(
            ["dealLeftCardEnt", "dealLeftTitle", "dealLeftImage", "dealLeftHeader", "leftDealPrice"],
            ["dealCenterCardEnt", "dealCenterTitle", "dealCenterImage", "dealCenterHeader", "centerDealPrice"],
            ["dealRightCardEnt", "dealRightTitle", "dealRightImage", "dealRightHeader", "rightDealPrice"]
        );
        
        testDeals.grabData("././assets/php/ajax/grabDealDataAjax.php");
    </script>
</section>