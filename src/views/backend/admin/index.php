<?php $title = "Admin"; ?>
<?php ob_start();
?>

<header class="header navbar navbar-expand navbar-backend" data-scroll-header="">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <a href="getting-started.html" class="navbar-brand flex-shrink-0 py-1 py-lg-2">
		  <img src="/images/logo.png" alt="Blogger">
      <span>blogger J</span>
          </a>
         
        </div>
        <div class="d-flex align-items-center w-100">
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-speedometer2 opacity-70 fs-lg me-1"></i>
                &nbsp;Tableau de bord
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?action=home" class="nav-link">
              <i class="bi bi-display opacity-70 fs-lg me-1"></i>
                &nbsp;Le blog
              </a>
            </li>


            <li class="nav-item">
              <a href="index.php?action=home" class="nav-link">
              <i class="bi bi-display opacity-70 fs-lg me-1"></i>
                &nbsp;Tableau de bord 2
              </a>
            </li>
          </ul>
          <button type="button" class="navbar-toggler d-block d-lg-none ms-auto me-4" data-bs-toggle="offcanvas" data-bs-target="#docsNav" aria-controls="docsNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       


          <div class="pe-lg-1 ms-lg-auto">
               
          <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary btn-sm fs-sm rounded ms-4 d-none d-lg-inline-flex" target="_blank" rel="noopener">
            <i class="bi bi-arrow-right me-1"></i>
            &nbsp;Se déconnecter
          </a>
          </div>

       
     

    
          
        </div>
      </div>
    </header>

	<aside data-bs-theme="dark">
      <div id="docsNav" class="offcanvas-lg offcanvas-start d-flex flex-column position-fixed top-0 start-0 vh-100 bg-dark border-end-lg" style="width: 21rem; z-index: 1045;">
        <div class="offcanvas-header d-none d-lg-flex justify-content-start">
          <a href="index.php?action=home" class="navbar-brand d-none d-lg-flex py-0">
		  <img src="/images/logo-negatif.png" class="img-fluid"    alt="Blogger">
      <span>blogger J</span>
		
          </a>
          
        </div>
        <div class="offcanvas-header d-block d-lg-none border-bottom">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="d-lg-none mb-0">Menu</h5>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#docsNav" aria-label="Close"></button>
          </div>
          <div class="list-group list-group-flush mx-n4">
            <a href="../index.html" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
              <i class="bi bi-speedometer2 fs-lg  me-2"></i>
              Tableau de bord
            </a>
            <a href="../components/typography.html" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
              <i class="bi bi-display fs-lg  me-2"></i>
              Le blog
            </a>
          </div>
        </div>
        <div class="offcanvas-body p-4">
          <div class="swiper-wrapper">
            <div class="swiper-slide h-auto">
              <div class="text-center pt-5">
                <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                  <img src="images/avatar.png" class="d-block rounded-circle" width="120" alt="John Doe">
                  <button type="button" class="btn btn-icon btn-light bg-white btn-sm border rounded-circle shadow-sm position-absolute bottom-0 end-0 mt-4" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Change picture" data-bs-original-title="Change picture">
                    <i class="bi bi-lock"></i>
                  </button>
                </div>
                <h2 class="h5 mb-1">John Doe</h2>
                <p class="mb-3 pb-3">jonny@email.com</p>
                <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
                  <i class="bi bi-lock fs-xl me-2"></i>
                  Account menu
                  <i class="bi bi-lock fs-lg ms-1"></i>
                </button>
                <div id="account-menu" class="list-group list-group-flush collapse d-md-block">
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                  <div class="btn btn-icon-secondary-aside active">
                  <i class="bi bi-gear"></i>
                </div>
                    
                  Details du compte
                  </a>


                  <a href="index.php?action=accountsecurity" class="list-group-item list-group-item-action d-flex align-items-center ">
                  <div class="btn btn-icon-secondary-aside">
                  <i class="bi bi-lock"></i>
                </div>
                    
                  Sécurité du compte
                  </a>




                  <a href="index.php?action=home" class="list-group-item list-group-item-action d-flex align-items-center">
                  <div class="btn btn-icon-secondary-aside ">
                  <i class="bi bi-box-arrow-left"></i>
                </div>
                    Se déconnecter
                  </a>
               
                
                
                </div>
                
              </div>

            <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                  <img src="images/user.png" class="d-block rounded-circle" width="120" alt="John Doe">
                  <button type="button" class="btn btn-icon btn-light bg-white btn-sm border rounded-circle shadow-sm position-absolute bottom-0 end-0 mt-4" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Change picture" data-bs-original-title="Change picture">
                    <i class="bi bi-download"></i>
                  </button>
                  
                </div>
                <div class="text-center">
                <h3 class="h5 mb-1">Justine Leleu</h3>
                <p class="mb-3 pb-3">Admin</p>
                </div>
                
      

       
                <div class="accordion" id="accordionAlt">
                    <!-- Item -->
                    <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <i class="bi bi-pin-angle fs-lg me-3"></i> Articles</button>
                        </h3>
                        <div class="accordion-collapse collapse show" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionAlt">
                            <div class="accordion-body pt-0">This is the first item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.</div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="bi bi-chat-square fs-lg me-3"></i>Commentaires</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionAlt">
                            <div class="accordion-body pt-0">This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.</div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="bi bi-people fs-lg me-3"></i>Utilisateurs</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionAlt">
                            <div class="accordion-body pt-0">This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.</div>
                        </div>
                    </div>
                </div>
              
            </div>
          </div>
          <div class="swiper-scrollbar end-0"></div>
  
        </div>
        <div class="offcanvas-header border-top">
          <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
          <i class="bi bi-arrow-right me-1"></i>
          &nbsp;Se déconnecter
          </a>
        </div>
      </div>
    </aside>



	<main class="docs-container pt-5 pb-3 pb-lg-4">
      <div class="container-fluid px-xxl-5 px-lg-4 pt-4 pt-lg-5 pb-4">
   
      <h1 class="ps-lg-2 ps-xxl-0 mt-2 mt-lg-0 pt-4 pb-2 mb-3 mb-xl-4">Project structure</h1>
   <!-- Portfolio list view -->
<div class="row">
  <div class="col-md-3 pb-1 mb-3 pb-md-0 mb-md-0">
    <a href="#">
      <img src="images/StockSnap_Q3N39D0OEJ.webp" class="img-fluid"  alt="Image">
    </a>
  </div>
  <div class="col-md-8">
    <div class="ps-md-4 ms-md-2">
      <div class="fs-sm text-muted mb-1">Nov 18, 2023</div>
      <h2 class="h3">SaaS Project Management Tool</h2>
      <a href="#" class="d-table badge bg-faded-primary text-primary fs-sm mb-3">Graphic Design</a>
      <p class="d-md-none d-lg-block pb-3 mb-2 mb-md-3">Malesuada eu cursus natoque purus ipsum nunc, velit cras tellus. Maecenas viverra pellentesque at ultrices purus vitae quis erat volutpat. Turpis auctor neque bibendum id pellentesque ut egestas. Donec ut faucibus nisl nec at purus. Cursus vel gravida gravida purus varius feugiat.Semper mauris id adipiscing est. Nam leo rutrum gravida curabitur at vel risus.</p>
      <a href="#" class="btn btn-outline-primary">View more</a>
    </div>
  </div>
</div>
      
      
        <!-- Disclaimer -->
        <div class="card card-body border-0 shadow-sm position-relative overflow-hidden ps-sm-5 mb-5">
          <div class="position-absolute top-0 start-0 w-3 h-100 bg-danger"></div>
          <h2 class="h4 fw-normal lh-base"><span class="fw-semibold">Silicon template</span> you are currently viewing is a <span class="fw-semibold">Static HTML (Bootstrap 5) Temaplate</span>, <span class="text-danger fw-semibold">NOT a WordPress Theme!</span></h2>
          <p class="fs-lg mb-1">Please DO NOT try to install Silicon files into WordPress this will not work. If you need a WordPress version of Silicon do not hesitate to contact us via email <a href="mailto:support@createx.studio">support@createx.studio</a>.</p>
        </div>

        <h2 class="h3 mt-n2 mt-xl-0">Prerequisites</h2>
        <p>Make sure you are familiar with the following technologies before purchasing Silicon HTML (Bootstrap 5) Template:</p>
        <ul>
          <li class="mb-1">HTML / CSS / JS (required)</li>
          <li class="mb-1">Bootstrap 5 (required)</li>
          <li class="mb-1">Sass / Scss (highly recommended). It's much easier to customize the template using Scss variables than find and replace code in CSS file.</li>
          <li>Npm (optional)*. Npm is a package manager for Node. With Npm you can manage (install, update, delete) your project dependencies much easier. It also offers a powerful feature called "Npm scripts". Scripts help with performing repetitive tasks like minification, compilation, unit testing, linting, etc.</li>
        </ul>
        <p>* All the configuration files like <code>package.json</code> are included in the download package. The list of all configuration files and their purpose you will find in the corresponding article <a href="configuration-files.html" class="fw-semibold">Configuration files</a></p>

        <h2 class="h3 pt-3">Next steps</h2>
        <p>There are 2 ways of customizing Silicon template:</p>
        <ol>
          <li>Using <a href="dev-setup.html" class="fw-semibold">Pro Front-end Setup</a> (highly recommended)</li>
          <li>Editing CSS directly or using VS Code plugin <a href="https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass" target="_blank" rel="noopener">Live Sass Compiler</a> to compile Scss</li>
        </ol>
      </div>
    </main>









      


<?php $content = ob_get_clean(); ?>
<?php require('../src/views/layouts/gabarit2.php') ?>