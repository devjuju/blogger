<?php $title = "Mot de passe oublié"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Mot de passe oublié?</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Mot de passe oublié?</h1>
  </div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">

<div class="row gx-5">
    <div class="col-6">
    <div class="col-left-content">
                
                <img src="images/bloggerj-img-01.svg" class="img-fluid featured-image-post" alt="image">
    </div>


    </div>
    <div class="col-6">
    <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block"></div>
                <div class="card-body position-relative zindex-2">

                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                <!--begin::Title-->
                <div class="pb-5 pb-lg-15">
                    <h3 class="fw-bold text-gray-900 display-6">Oubli du mot de passe</h3>
                    <div class="text-muted fw-semibold fs-5">
                        Entrez votre e-mail pour réinitialiser votre mot de passe ou 
                        <a href="index.php?action=register" class="text-color-primary fw-bold">créer votre compte</a>
                    </div>
                </div>
                <!--begin::Title-->

                <!--begin::Form group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-label fs-6 fw-bold text-gray-900">Email</label>
                    <input class="form-control form-control-lg" type="text" name="username" autocomplete="off">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                <!--end::Form group-->

                <div style="margin-bottom: 40px;"> </div>
                <!--begin::Action-->
                <div class="d-flex flex-wrap">
                <a href="index.php?action=login"><button type="button" class="btn btn-secondary me-3">Annuler</button></a> 
                <button type="submit" class="btn btn-primary">Envoyer</button>
                    
                </div>
                <!--end::Action-->
         
         
                </div>
              </div>
    </div>
  </div>

      </section>




<?php $content = ob_get_clean(); ?>
<?php require('../src/views/layouts/gabarit.php') ?>