<!DOCTYPE html>
<html lang="en">

<?php
$title = "Weronika Dyląg | Paintings";
include "/blocks/head.php";
?>

<body>
    <?php include "/blocks/header.php"; ?>

    <main>
        <section>
            <div class="blog">
                <?php
                // EDIT THIS LIST TO ADD/REMOVE/CHANGE ORDER OF THE BLOGS
                $blogs = [
                    "purpose-of-art",
                    "exploring-red",
                    "paint-folding",
                    "inspiration",
                    "colour-palette",
                    "not-obvious-forms"
                ];

                foreach ($blogs as $blog) {
                ?>
                    <div class="image-container">
                        <a href="/blog/<?= $blog ?>">
                            <img src="/content/blog/<?= $blog ?>/summary.jpg" />
                            <div class="blur p-3">Read full article ></div>
                        </a>
                    </div>
                    <div class="description-container">
                        <?php include "/content/blog/" . $blog . "/summary.html"; ?>
                        <a href="/blog/<?= $blog ?>">Read full article</a>
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