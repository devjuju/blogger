<?php $title = "Erreur 404"; ?>
<?php
ob_start();
use App\Core\Exception;

$errorMsg = new Exception();
?>
<!-- Erreur 404? -->
<section class="container d-flex flex-column h-100 align-items-center position-relative zindex-5 pt-5">
    <div class="text-center pt-5 pb-3 mt-auto">
    <h1 class="display-1" style="font: size 900px; color:red;">404</h1>
    <h2 class="display-5">Oooups!</h2>
    <h6 class="alert alert-warning"><?= htmlspecialchars($errorMsg) ?></h6>
    <p class="fs-xl pb-3 pb-md-0 mb-md-5">La page que vous recherchez n'existe pas</p>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('../src/views/layouts/gabarit.php') ?>