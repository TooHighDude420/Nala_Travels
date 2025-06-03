<section class="h-[80vh]">
    <div id="locationsHolder" class="pt-[20px] pl-[20px]">
        <h1>Uitgelichte Locaties</h1>
        <div id="cardHolder" class="flex gap-x-[5%] justify-center pl-[0px]">
            <div>
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
                </div>
            </div>

            <div>
                <img onclick="test.prevCard()" src="assets/img/cards/ArrowRight.png" alt="RightArrow">
            </div>
        </div>
    </div>

    <div id="dealsHolder" class="pt-[20px] pl-[20px]">
        <h1>Uitgelichte deals</h1>
        <div id="dealCardHolder" class="flex gap-x-[5%] justify-center pl-[0px]">
            <div>
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
                </div>
            </div>

            <div>
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
        const test = new CarrMain(["leftCardEnt", "leftTitle", "leftImage", "leftHeader"], ["centerCardEnt", "centerTitle", "centerImage", "middleHeader"], ["rightCardEnt", "rightTitle", "rightImage", "rightHeader"]);
        test.go(
            testArray = [
                {
                    Title: "Spanje",
                    Img: "Spanje"
                },

                {
                    Title: "Servië",
                    Img: "Servie"
                },

                {
                    Title: "Indonesië",
                    Img: "Indonesie"
                }
            ]
        );

        const testDeals = new CarrMain(["dealLeftCardEnt", "dealLeftTitle", "dealLeftImage", "dealLeftHeader"], ["dealCenterCardEnt", "dealCenterTitle", "dealCenterImage", "dealCenterHeader"], ["dealRightCardEnt", "dealRightTitle", "dealRightImage", "dealRightHeader"]);
        testDeals.go(
            testArray = [
                {
                    Title: "Spanje + Auto + Tour",
                    Img: "Spanje"
                },

                {
                    Title: "Servië + Hotel + Auto",
                    Img: "Servie"
                },

                {
                    Title: "Indonesië + Hotel",
                    Img: "Indonesie"
                }
            ]
        );
    </script>
</section>