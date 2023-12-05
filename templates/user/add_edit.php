<?php require_once _TEMPLATEPATH_ . '/header.php';
/** @var \App\Entity\User $user */
?>

<h1><?= $pageTitle; ?></h1>

<form method="POST">
    <div class="mb-3">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" class="form-control <?=(isset($errors['first_name']) ? 'is-invalid': '') ?>" id="first_name" name="first_name" value="">
        <?php if(isset($errors['first_name'])) { ?>
            <div class="invalid-feedback"><?=$errors['first_name'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" class="form-control <?=(isset($errors['last_name']) ? 'is-invalid': '') ?>" id="last_name" name="last_name" value="">
        <?php if(isset($errors['last_name'])) { ?>
            <div class="invalid-feedback"><?=$errors['last_name'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?=(isset($errors['email']) ? 'is-invalid': '') ?>" id="email" name="email" value="">
        <?php if(isset($errors['email'])) { ?>
            <div class="invalid-feedback"><?=$errors['email'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control <?=(isset($errors['password']) ? 'is-invalid': '') ?>" id="password" name="password" value="">
        <?php if(isset($errors['password'])) { ?>
            <div class="invalid-feedback"><?=$errors['password'] ?></div>
        <?php } ?>
    </div>


    <input type="submit" name="saveUser" class="btn btn-primary" value="Enregistrer">

</form>


<?php require_once _TEMPLATEPATH_ . '/footer.php'; ?>