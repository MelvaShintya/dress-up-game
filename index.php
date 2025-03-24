<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dress-Up Game</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="character-container">
            <div id="acc"></div>
            <div id="shirt"></div>
            <div id="hair"></div>
            <div id="eye">
                <img src="assets/eye_1.png" class="outfit" style="z-index: 3;">
            </div>
            <div id="skin"></div>
            <img src="assets/character.png" alt="Character" class="character" id="character">
        </div>
        <div class="clothes-container">
            <button class="prev-button">&#10094;</button>
            <div class="clothes" id="clothes-skin">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <img src="assets/skin_<?= $i ?>.png" class="skin" data-skin="skin_<?= $i ?>.png" alt="skin">
                <?php } ?>
            </div>
            <div class="clothes" id="clothes-eye">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <img src="assets/eye_<?= $i ?>.png" class="eye" data-eye="eye_<?= $i ?>.png" alt="eye">
                <?php } ?>
            </div>
            <div class="clothes" id="clothes-hair">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                <img src="assets/hair_<?= $i ?>.png" class="hair" data-hair="hair_trans_<?= $i ?>.png" alt="hair">
                <?php } ?>
            </div>
            <div class="clothes" id="clothes-shirt">
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                <img src="assets/shirt_<?= $i ?>.png" class="shirt" data-shirt="shirt_trans_<?= $i ?>.png" alt="shirt">
                <?php } ?>
            </div>
            <div class="clothes" id="clothes-acc">
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                <img src="assets/acc_<?= $i ?>.png" class="acc" data-acc="acc_<?= $i ?>.png" alt="acc">
                <?php } ?>
            </div>
            <button class="next-button">&#10095;</button>
        </div>
        <div class="button-done">
            <img src="assets/done.png" class="button-done" data-outhes="assets/done.png" alt="Submit">
        </div>
    </div>
    <script>
    $(document).ready(function() {
        let categories = $(".clothes-container .clothes");
        let currentIndex = 0;

        function showCategory(index) {
            categories.hide();
            $(categories[index]).show();
        }

        $(".next-button").click(function() {
            currentIndex = (currentIndex + 1) % categories.length;
            showCategory(currentIndex);
        });

        $(".prev-button").click(function() {
            currentIndex = (currentIndex - 1 + categories.length) % categories.length;
            showCategory(currentIndex);
        });

        showCategory(currentIndex);

        $(".skin").click(function() {
            let outfit = $(this).attr("data-skin");
            let currentOutfit = $("#skin img").attr("src");

            if (currentOutfit === outfit) {
                $("#skin").html("");
            } else {
                $("#skin").html('<img src="assets/' + outfit + '" class="outfit">');
            }
        });

        $(".eye").click(function() {
            let outfit = $(this).attr("data-eye");
            let currentOutfit = $("#eye img").attr("src");

            if (currentOutfit === outfit) {
                $("#eye").html("");
            } else {
                $("#eye").html('<img src="assets/' + outfit + '" class="outfit" style="z-index: 3;">');
            }
        });

        $(".hair").click(function() {
            let outfit = $(this).attr("data-hair");
            let currentOutfit = $("#hair img").attr("src");

            if (currentOutfit === outfit) {
                $("#hair").html("");
            } else {
                $("#hair").html('<img src="assets/' + outfit + '" class="outfit" style="z-index: 2;">');
            }
        });

        $(".shirt").click(function() {
            let outfit = $(this).attr("data-shirt");
            let currentOutfit = $("#shirt img").attr("src");

            if (currentOutfit === outfit) {
                $("#shirt").html("");
            } else {
                $("#shirt").html('<img src="assets/' + outfit + '" class="outfit" style="z-index: 4;">');
            }
        });

        $(".acc").click(function() {
            let outfit = $(this).attr("data-acc");
            let currentOutfit = $("#acc img").attr("src");

            if (currentOutfit === outfit) {
                $("#acc").html("");
            } else {
                $("#acc").html('<img src="assets/' + outfit + '" class="outfit" style="z-index: 5;">');
            }
        });

        $(".button-done").click(function() {
            if (window.innerWidth <= 480) {
                $(".outfit").css("bottom", "0px");
            } else {
                $(".outfit").css("bottom", "45px");
            }
            $(".clothes-container").remove();
            $(".button-done").remove();
        });
    });
    </script>
</body>

</html>