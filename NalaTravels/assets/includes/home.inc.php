<section>
    <div id="locationsHolder" class="pt-[20px] pl-[20px]">
        <h1>Uitgelichte Locaties</h1>
        <div id="cardHolder" class="flex gap-x-[5%] justify-center pl-[0px]">
            <div>
                <img onclick="nextCard()" src="assets/img/cards/ArrowLeft.png" alt="LeftArrow">
            </div>

            <div id="leftCardEnt" class="h-[20vh] w-[15%]">
                <div id="leftHeader"
                    class="bg-[#76C893] h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
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
                    class="bg-[#52B69A] h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
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
                    class="bg-[#99D98C] h-[5vh] rounded-tl-md rounded-tr-md flex flex-col content-center justify-center flex-wrap">
                    <h1 id="rightTitle"></h1>
                </div>
                <div id="rightContent">
                    <div class="w-full h-[20vh] bg-black">
                        <img id="rightImage" src="" alt="" class="h-full w-full">
                    </div>
                </div>
            </div>

            <div>
                <img onclick="prevCard()" src="assets/img/cards/ArrowRight.png" alt="RightArrow">
            </div>

        </div>
    </div>
    <script src="assets/js/carrousel/Card.js"></script>
    <script src="assets/js/carrousel/Carrousel.js"></script>
    <script src="assets/js/carrousel/myWork.js"></script>
</section>