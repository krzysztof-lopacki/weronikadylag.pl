<!DOCTYPE html>
<html lang="en">

<?php
$title = "Weronika Dyląg | Portfolio";
include "/blocks/head.php";
?>

<body>
    <?php include "/blocks/header.html"; ?>

    <main>
        <section>
            <div class="portfolio">
                <?php
                // EDIT THIS LIST TO ADD/REMOVE/CHANGE ORDER OF THE PAINTINGS!!!
                $allPaintings = ["to-explore", "to-stand-out", "cognitive-flexibility", "breaking-cycle", "awe", "attentive", "seeking", "self-esteem", "self-awareness", "flow", "inner-self"];

                $requestedPainting = $_GET["query"];

                if (!empty($requestedPainting)) {
                    $indexOf = array_search($requestedPainting, $allPaintings);
                    if ($indexOf) {
                        array_splice($allPaintings, $indexOf, 1);
                        array_unshift($allPaintings, $requestedPainting);
                    }
                }
                foreach ($allPaintings as $painting) {
                ?>
                    <div class="paiting-container">
                        <div class="photo-container">
                            <img src="/content/paintings/<?= $painting ?>/<?= $painting ?>-portfolio.jpg" class="photo" />
                        </div>
                        <div class="description-container">
                            <?php include "/content/paintings/" . $painting . "/" . $painting . "-description.html"; ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            </div>

        </section>
    </main>

    <?php include "/blocks/footer.html"; ?>
</body>

</html>