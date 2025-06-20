<section class="login h-[80vh] w-full">
    <div class="flex">
        <div class="flex flex-col h-[70vh] w-[33%] gap-y-[2vh] items-center">
            <div>
                <h1>Laat een review achter!</h1>
            </div>

            <form action="" class="h-[80%] w-[80%] flex flex-col flex-wrap justify-around">

                <div class="h-[8%]">
                    <input class="w-[100%] h-[100%] bg-[#184E77] text-white placeholder:text-white rounded" type="text" id="name" placeholder=" Naam">
                </div>

                <div class="bg-[#1A759F] h-[16%] flex items-center rounded">
                    <input class="bg-[#1A759F] w-[76%] text-white placeholder:text-white" type="text" id="subject" placeholder=" Onderwerp">
                    <select class="w-[22%] h-[70%] bg-[#168AAD] text-white rounded" name="stars" id="stars">
                        <option value="def" selected="true" disabled="disabled">Sterren</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>

                <div class="h-[32%] w-full">
                    <textarea class="h-full w-full bg-[#34A0A4] text-white placeholder:text-white" name="review" id="review" placeholder=" Jouw review"></textarea>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-3 grid-rows-3 gap-4 w-full">
            <div class="size-48 bg-white flex flex-col">
                <p>Naam</p>
                <p>Onderwerp</p>
                <p>review</p>
            </div>
            <div class="size-48 bg-white">

            </div>
            <div class="size-48 bg-white">
                
            </div>
            <div class="size-48 bg-white">
                
            </div>
            <div class="size-48 bg-white">
                
            </div>
            <div class="size-48 bg-white">
                
            </div>
        </div>
    </div>
</section>