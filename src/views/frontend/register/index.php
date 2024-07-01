<?php $title = "S'inscrire"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">S'inscrire</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Créer un compte</h1>
  </div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row gx-5">
        <div class="col-6">
            <div class="col-left-content">
                <h2 class="pb-3 pb-md-4 mb-lg-5">Abonnes-toi et reçois du contenu exclusif rien que pour toi !</h2>
                <img src="images/blogger—j-img02.svg" class="img-fluid featured-image-post" alt="image">
            </div>
        </div>
        <div class="col-6">
            <div class="card-shadow py-3 p-sm-4 p-md-5">
                <div class="card-header">
                    <h3 class="fw-bold text-gray-900 display-6">S'inscrire</h3>
                    <p class="text-muted fw-semibold fs-5">
                        Entrez vos coordonnées pour créer votre compte
                    </p>
                </div>
                <div class="card-body">
                    <form method="post" class="needs-validation mb-2" novalidate="">
                        
                        <div class="mb-4 form-group-style">
                            <label class="form-label fs-base" for="lastname">Pseudo</label>
                            <input type="text" id="lastname" name="register[lastname]" placeholder="" value="<?= isset($register) ? $register->getPseudo() : '' ?>">
                            <?= isset($controle["pseudo"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["pseudo"] . "</p>" : '' ?>      
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2">
                <div class="col mb-4 form-group-style">
                <label class="form-label fs-base" for="lastname">Nom</label>
                  <input type="text" id="lastname" name="register[lastname]" placeholder="" value="<?= isset($register) ? $register->getLastname() : '' ?>">
                  <?= isset($controle["lastname"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["lastname"] . "</p>" : '' ?> 
                </div>
                <div class="col mb-4 form-group-style">
                <label class="form-label fs-base" for="firstname">Prénom</label>
                  <input type="text" id="firstname" name="register[firstname]" placeholder="" value="<?= isset($register) ? $register->getFirstname() : '' ?>">
                  <?= isset($controle["firstname"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["firstname"] . "</p>" : '' ?>
                </div>
                        </div>
                        <div class="mb-4 form-group-style">
                            <label class="form-label fs-base" for="email">Email</label>
                            <input type="email" placeholder="" id="email" name="register[email]" value="<?= isset($register) ? $register->getEmail() : '' ?>">
                            <?= isset($controle["email"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["email"] . "</p>" : '' ?>
                        </div>
                        <div class="mb-4 form-group-style">
                            <div class="form-group-password">                  <label for="password" class="form-label fs-base">Mot de passe</label>
                                <input type="password" id="password" value="<?= isset($register) ? $register->getPassword() : '' ?>">
                                <?= isset($controle["password"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["password"] . "</p>" : '' ?>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="index.php?action=home"><button type="button" class="btn btn-secondary me-3">Annuler</button></a> 
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                            
                        </div>
                        <hr>
                        <a href="index.php?action=account" class="color-link-primary">
                        <h2 class="h6 text-center pt-3 pt-lg-4 mb-4">Voir la page du compte</h2>
                        </a>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?php $content = ob_get_clean(); ?>
<?php require('../src/views/layouts/gabarit.php') ?>