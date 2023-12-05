<main>
    <?php
    include(__DIR__ . '/../Model/Movie.php');
    ?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($movies as $movie) {
                $movie->printCard();
            }
            ?>
        </div>
    </div>


</main>