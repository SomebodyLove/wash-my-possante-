<?php

if (!defined('URL')){
    header("location: /");
    exit();
}

//var_dump($this->dados['noticias']);
//exit;

//echo "<br />View HOME <br />";
//var_dump($this->dados['carousel']);?>
<!-- HEADER -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Wash My Possante!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?= URL; ?>assets/img/wmp-logo.png" >
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?= URL; ?>assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/aos.css">
  <link rel="stylesheet" href="<?= URL; ?>assets/css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <!-- /HEADER -->

  <!-- MENU -->
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html"> <img src="<?= URL; ?>assets/img/wmp-logo.png" alt="logo"> WashMyPossante!</a></div>
          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#programs-section" class="nav-link">Como Funciona</a></li>
                <li><a href="#teachers-section" class="nav-link">Apoiadores</a></li>
                <li><a href="#aboutus-section" class="nav-link">Sobre nós</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contate-nos</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>

    <!-- /MENU -->

    <!-- MAIN -->
    <div class="intro-section" id="home-section">
      <div class="slide-1" style="background-image: url('<?= URL; ?>assets/img/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Seja um membro desta comunidade!</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="<?= URL; ?>PerfilLavador/register.html"
                      onclick="document.getElementById('id01').style.display='block'"
                      class="btn btn-primary py-3 px-5 btn-pill">Registre-se</a></p>
                  </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Login</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <a href="<?= URL; ?>PerfilLavador/index.html"><input type="submit" class="btn btn-primary btn-pill" value="Login"></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Como Funciona</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non
              aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!
            </p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/hand_wash1.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Sem tempo para lavar seu possante?</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus
              fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/world_drive.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Lavando mundo a fora!</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus
              fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/better_wash.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Aderido pelos melhores profissionais</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus
              fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="teachers-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Apoiadores</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque!
              Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam,
              illum sed veniam!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/person_1.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Hinova Mais</h3>
                <p class="position">Lava-Jato</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto
                  tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">KSB Car Wash</h3>
                <p class="position">Lava-Jato</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto
                  tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Cambona</h3>
                <p class="position">Lava-Jato</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto
                  tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-image overlay" style="background-image: url('images/bg-parallax.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jerome Jensen</h3>
            <blockquote>
              <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius
                necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit
                molestias! Rem reprehenderit assumenda &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section pb-0" id="aboutus-section">
      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/water_splash1.png" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/water_splash1.png" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Sobre Nós</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 rounded bg-white why-choose-us-box">
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">22,931 Yearly Graduates</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">150 Universities Worldwide</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Top Professionals in The World</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Expand Your Knowledge</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Best Online Teaching Assistant Courses</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Best Teachers</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
            <img src="images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-3">Contate-nos!</h2>
            <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam
              temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Cargo">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Escreva aqui sua mensagem :)"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Enviar Mensagem">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- /MAIN -->

    <!-- FOOTER -->
    <footer class="footer-section bg-black">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 style="color: white">Sobre Wash My Possante!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis
              corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 style="color: white">Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Como Funciona</a></li>
              <li><a href="#">Apoiadores</a></li>
              <li><a href="#">Sobre nós</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3 style="color: white">Saiba mais!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto?
              Numquam, natus?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control" placeholder="Email">
                <div style="margin-top: 2px"><input type="submit" class="btn btn-primary" value="Enviar"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="<?= URL; ?>assets/js/jquery-3.3.1.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery-migrate-3.0.1.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery-ui.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/popper.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/bootstrap.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/owl.carousel.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery.stellar.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery.countdown.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/bootstrap-datepicker.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery.easing.1.3.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/aos.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery.fancybox.min.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/jquery.sticky.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script src="<?= URL; ?>assets/js/main.js" type="93e7951aafb82f93dba161f0-text/javascript"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    type="93e7951aafb82f93dba161f0-text/javascript"></script>
  <script type="93e7951aafb82f93dba161f0-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="93e7951aafb82f93dba161f0-|49" defer=""></script>


</body>

</html>

<!-- /FOOTER -->