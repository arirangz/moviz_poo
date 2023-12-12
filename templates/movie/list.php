<?php require_once _ROOTPATH_ . '/templates/header.php';
?>

<div class="row">
    <?php foreach ($movies as $movie) {
        /** @var App\Entity\Movie $movie */
    ?>
        <div class="col-md-4 my-2">
            <div class="card w-100">
                <img src="<?= $movie->getImagePath() ?>" class="card-img-top" alt="<?= $movie->getTitle() ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->getTitle() ?></h5>
                    <a href="index.php?controller=movie&action=show&id=<?= $movie->getId() ?>" class="btn btn-primary">Voir la fiche</a>
                </div>
            </div>

        </div>
    <?php } ?>
</div>



<?php require_once _ROOTPATH_ . '/templates/footer.php'; ?>