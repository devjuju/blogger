<?php $title = "Réception"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=contact">Contact</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Réception</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Réception du message</h1>
    <span class="subtitle">Merci de votre message ! Je vous répondrai dans les plus brefs délais.</span>    
  </div>
</section>



<section class="container py-5 my-1 my-md-4 my-lg-5">

<div class="row gx-5">
    <div class="col-6">
    <div class="pe-lg-4 pe-xl-0 ">
                <h2 class="pb-3 pb-md-4 mb-lg-5">Message bien reçu !</h2>
                <img src="images/bloggerj-img-01.svg" class="img-fluid featured-image-post" alt="image">
          
                
               
              </div>
    </div>
    <div class="col-6">
    <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block"></div>
                <div class="card-body position-relative zindex-2">
                  <h2 class="card-title pb-3 mb-4">Rappel de vos informations</h2>

                  <div class="pe-lg-4 pe-xl-0"> 
                  <h5 class="fw-bold mb-3">Infos du profil</h5>
                  <p>Nom : <strong>Nom</strong> </p>
                  <p>Prénom : <strong>Lorem</strong> </p>
                  </div>


                  <div class="pe-lg-4 pe-xl-0"> 
                  <h5 class="fw-bold mb-3">Coordonnées personnelles:</h5>
                  <p>Email : <strong>loremipsum@gmail.com</strong> </p>
                  <p>N°tel : <strong>00 00 00 00</strong> </p>
                  </div>


                  <div class="pe-lg-4 pe-xl-0"> 
                  <h5 class="fw-bold mb-3">Objet du message:</h5>
                  <p>Envoyer un message</p>
                  </div>

                  <div class="pe-lg-4 pe-xl-0"> 
                  <h5 class="fw-bold mb-3">Message:</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis.</p>
                  </div>

                  <div class="pe-lg-4 pe-xl-0"> 
                  <a href="#" class="btn btn-primary text-decoration-none">
                  Retour à la page d'Accueil
                </a>


           
                  </div>
                 
         
         



              
                </div>
              </div>
    </div>
  </div>

      </section>



<?php $content = ob_get_clean(); ?>
<?php require('../src/views/layouts/gabarit.php') ?>