<?php require_once _TEMPLATEPATH_ . '/header.php';
/** @var \App\Entity\User $user */
?>

<h1><?= $pageTitle; ?></h1>

<form method="POST">
    <div class="mb-3">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" class="form-control " id="first_name" name="first_name" value="">
            </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" class="form-control " id="last_name" name="last_name" value="">
            </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control " id="email" name="email" value="">
            </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control " id="password" name="password" value="">
            </div>


    <input type="submit" name="saveUser" class="btn btn-primary" value="Enregistrer">

</form>


<?php require_once _TEMPLATEPATH_ . '/footer.php'; ?>