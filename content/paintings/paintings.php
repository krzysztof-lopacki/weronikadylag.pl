<!DOCTYPE html>
<html lang="en">

<head>
<?php
$requestedPainting = $_GET["query"];
if (!empty($requestedPainting)) {
?>
  <link rel="canonical" href="https://www.weronikadylag.pl/paintings" />
<?php
}

$title = "Weronika Dyląg | Paintings";
$siteDescription = "Discover colorful abstract acrylic paintings on linen canvases.";
include "/blocks/head.php";
?>
<head>

<body>
    <?php include "/blocks/header.php"; ?>

    <main>
        <section>
            <div class="portfolio">
                <?php
                // EDIT THIS LIST TO ADD/REMOVE/CHANGE ORDER OF THE PAINTINGS!!!
                $allPaintings = [
                    "dissolution",
                    "chaotic-harmony",
                    "magic-happens",
                    "the-attractor",
					"nonlinear",
                    "entropy",
                    "chaos-in-order",
                    "rebirth",
                    "estranged",
                    "suvienage",
					"close",
					"entity",
                    "to-explore",
                    "inner-self",
                    "in-the-dark",
                    "heart",
                    "attentive",
                    "cognitive-flexibility",
                    "at-heart",
                    "pride",
                    "flow",
                    "hyperfocus",
                    "the-seed",
                    "wrapped",
                    "reef",
                    "endorphins",
                    "serotonin",
                    "individual-traits",
                    "spark",
                    "self-awareness",
                    "happy-place",
                    "resilience",
                    "breaking-cycle",
                    "to-stand-out",
                    "there-is-always-a-solution",
                    "anthozoa",
                    "june",
                    "siamese-bettas",
                    "wave",
                    "spreading",
                    "growing",
                    "awe",
                    "shaping-autonomy",
                    "joy",
                    "seeking",
                    "gratitude",
                    "coral",
                    "deep-sea-fish",
                    "to-express",
                    "serenity",
                    "scleractinia",
                    "summer-in-bloom",
                    "self-esteem",
                    "change",
                    "blooming",
                    "gold-fish",
                    "to-grow",
                    "koi",
                    "look-inside"
                ];

                $requestedPainting = $_GET["query"];
                //print ("Painting:".$requestedPainting."|");

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