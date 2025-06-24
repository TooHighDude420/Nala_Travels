<section class="login w-full">
    <div class="flex">
        <div class="flex flex-col h-[70vh] w-[33%] gap-y-[2vh] items-center pt-[50px] sticky top-[15vh]">
            <div class="text-xl">
                <h1>Laat een review achter!</h1>
            </div>

            <form action="assets/php/placeReview.php" method="post" class="h-[80%] w-[80%] flex flex-col flex-wrap justify-around">

                <div class="h-[8%]">
                    <input
                        class="w-[100%] h-[100%] bg-[#184E77] text-white placeholder:text-white rounded-[10px] text-sm"
                        type="text" name="name" id="name" placeholder=" Naam">
                </div>

                <div class="bg-[#1A759F] h-[16%] flex items-center rounded-[10px]">
                    <input class="bg-[#1A759F] w-[76%] text-white placeholder:text-white text-sm" type="text"
                        id="subject" name="subject" placeholder=" Onderwerp">
                    <select class="w-[30%] h-[70%] bg-[#168AAD] text-white rounded text-xs mr-2" name="stars"
                        id="stars">
                        <option value="def" selected="true" disabled="disabled" class="text-xs">Sterren</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="h-[32%] w-full">
                    <textarea
                        class="h-full w-full bg-[#34A0A4] text-white placeholder:text-white rounded-[10px] text-sm pt-[5px] pl-[3px]"
                        name="message" id="review" placeholder=" Jouw review"></textarea>
                </div>
                <button type="submit" class="text-white bg-black w-[10vh] h-[5vh] rounded-[5px]">Post</button>
            </form>
        </div>

        <div class="grid grid-cols-3 grid-rows-3 gap-4 w-full pt-[30px]">
            <?php
            $cols = [
                "[#D9ED92]",
                "[#B5E48C]",
                "[#99D98C]",
                "[#76CB93]",
                "[#52B69A]"
            ];

            $reviews = $database->getValidReviews();

            foreach($reviews as $review){
                $name = $review['name'];
                $subj = $review['subject'];
                $mess = $review['message'];

                echo "<review-block name='$name' subject='$subj' message='$mess'></review-block>";
            }
            ?>
        </div>
    </div>
</section>