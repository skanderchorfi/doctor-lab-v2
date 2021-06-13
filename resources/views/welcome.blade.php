<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DoctorLab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

          #more {display: none;}

</style>
        </style>
    </head>
    <body>

    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ url('/admin/login') }}" class="text-sm text-gray-700 underline">Admin</a>
                        <a href="{{ url('/login') }}" class="ml-4 text-sm text-gray-700 underline">Medecin</a>
                    @endauth
                </div>
            @endif

        </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">DoctorLab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    @if(session('error'))
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
          </div>
      </div>
    @endif
    <div class="container">
      <h1>Bienvenue à DoctorLab</h1>
      <h2>Plateforme de visualisation des données générées par le système de suivi de diabète </h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi choisir DoctorLAb?</h3>
              <p>
              Notre mission consiste à réaliser une plateforme Web « DoctorLab » dédiées aux
              laboratoires des recherches  offrira l'accès au Dashboard pour la visualisation des statistiques
              globale et les recommandation générées par les médecins aussi un espace de partage qui
              contient des manuels et des références liés au diabète

              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Apprendre encore plus <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Diabète Gestationnel</h4>
                    <p>Comme pour le diabète, le diabète gestationnel est une intolérance aux glucides<span id="dots"></span><span id="more"> c'est à dire un trouble de la régulation du glucose (glycémie) entraînant un excès de sucre dans le sang ou hyperglycémie chronique</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Diabète de Type 1</h4>
                    <p>Le diabète de type 1, aussi appelé diabète sucré, est le moins fréquent des diabètes<span id="dots"></span><span id="more"> Il est lié à un manque d'insuline ou à un défaut d'action de cette hormone. Le traitement associe régime alimentaire et insuline</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Diabète de Type 2</h4>
                    <p>Le diabète de type 2 est une maladie caractérisée par une hyperglycémie chronique<span id="dots"></span><span id="more"> c'est-à-dire par un taux trop élevé de glucose (sucre) dans le sang. Cette maladie survient généralement chez les adultes avançant en âge, et touche davantage les personnes obèses ou ayant un surplus de poids</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>

                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://youtu.be/PkHwH-kBn5I" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>
              DOCTORLAB</h3>
            <p>Au service du patient via des activités de recherche en laboratoire</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Application web Laboratoire</a></h4>
              <p class="description">
                DoctorLab
                Une application  simple et intuitive permettant de collecter toutes vos données de suivi en un seul endroit grâce aux objets connectés</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Le meilleur outil pour les chercheurs en diabète</a></h4>
              <p class="description">La plateforme de télésurveillance pour les spécialistes du diabète a été conçue directement depuis les usages du terrain pour faciliter la pratique au maximum.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">DoctorLab offrira :</a></h4>
              <p class="description"> les tendances relatives à l'évolution du diabète

<br>	Identification des nouveaux facteurs : diagramme du Chord

<br>	Classification des sujets en utilisant l’algorithme Machine à vecteurs de support « SVM »
</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Docteurs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departements</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Recherche Lab</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Récompenses</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>LES CHIFFRES DU DIABÈTE</h2>
          <p>Le diabète est « l’un des principaux tueurs au monde », avec l’hypertension artérielle et le tabagisme, selon l’Organisation Mondiale de la Santé (OMS).<span id="dots"></span><span id="more"> Cette maladie constitue un problème de santé publique majeur et malgré les efforts de prévention, la pandémie se poursuit.</span></p>
          <button onclick="myFunction()" id="myBtn">Read more</button>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">En 2014</a></h4>
              <p>En 2014, le diabète affectait 422 millions de personnes au niveau mondial, alors qu’il ne concernait que 108 millions de patients dans le monde en 1980<span id="dots"></span><span id="more">  et que les premières prévisions de l’Organisation Mondiale de la Santé (OMS) et de l’International Diabetes Federation (IDF) s’inquiétaient en 1990 du risque de voir le diabète affecter 240 millions de personnes en 2025…</span></p>
              <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">En 2019</a></h4>
              <p>En 2019, le diabète affecte plus de 463 millions de personnes dans le monde, dont 59 millions en Europe (source : Atlas 2019 de la International Diabetes Federation).</span></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">En France</a></h4>
              <p>En 2019, plus de 4,5 millions de personnes en France sont diabétiques, mais environ 1 million d’entre elles l’ignorent ! Cela représente un coût de 4 500€/pers<span id="dots"></span><span id="more">  atteinte de diabète par an.</span></p>
              <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">au sein de la Région Grand Est </a></h4>
              <p>En 2018, 365 000 habitants du Grand Est on été pris en charge pour un diabète, soit 6,6% de la population de cette région française.<span id="dots"></span><span id="more">  1 personnes sur 5 est diabétique au-delà de 65 ans.

                Dans le Grand Est, la prévalence standardisée de personnes diabétiques est supérieure à la valeur nationale : 5,7% contre 5%.</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Les complications du diabète en chiffres</a></h4>
              <p>Le diabète expose le patient à des complications sévères :

                en multipliant par 8 le risque d’amputation => 1ère cause d’amputation (hors accidents) avec 8.000 cas par an en France ;<span id="dots"></span><span id="more">  5 à 10 % des diabétiques sont ou seront amputés de l’orteil, du pied ou de la jambe.
                en multipliant par 8 le risque d’infarctus du myocarde ou d’accident vasculaire cérébral => 2ème cause d’accidents cardio-vasculaires</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Suite de complication</a></h4>
              <p>en multipliant par 9 le risque de dialyse pour insuffisance rénale terminale => 25% des cas de maladies détruisant les reins lui sont imputables.<span id="dots"></span><span id="more">
                1ère cause de cécité chez l’adulte et peut avoir un impact dramatique sur la qualité de vie et notamment en cas de neuropathie sévère ; 2% des diabétiques sont aveugles</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Les Traitements du diabète</h2>
          <p>Le traitement pour les patients atteints de diabète de type 1 est l’injection d’insuline pour compenser l’insuffisance de sécrétion de leur insuline endogène (environ 10% des patients).<span id="dots"></span><span id="more">

Dans le cas du diabète de type 2, le traitement est constitué dans un premier temps de médicaments antidiabétiques qui améliorent l’activité de l’insuline produite par le pancréas du patient, ou qui augmentent la production d’insuline si celle-ci s’avère trop faible.

Dans les faits, près de la moitié des cas de diabète de type 2 évoluent vers une forme nécessitant l’administration d’insuline.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="">AUTOSURVEILLANCE </a></h4>
              <p>L’autosurveillance glycémique permet de contrôler à tout moment la valeur de sa glycémie à l’aide d’appareils mesurant le sucre dans le sang : <span id="dots"></span><span id="more"> les lecteurs de glycémie.

               À partir des résultats obtenus, la personne diabétique est en mesure d’adapter son traitement en accord avec son médecin : son alimentation, son activité physique, son insuline ou ses comprimés antidiabétiques. Cette gestion quotidienne permet de maintenir des glycémies au plus près des valeurs normales.</span></p>
               <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <h4><a href="">L’INSULINE </a></h4>
            <p>L’insuline est la seule hormone peptidique hypoglycémiante sécrétée par de petits amas de cellules du pancréas, appelés îlots de Langerhans. <span id="dots"></span><span id="more">Son rôle est vital dans le métabolisme.

Sa fonction est de maintenir l’équilibre du taux de glucose (ou sucre) contenu dans le sang, en le faisant consommer par les tissus de l’organisme (muscles, tissus graisseux, etc.) et en diminuant sa production par le foie.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <h4><a href="">TRAITEMENTS PAR VOIE ORALE </a></h4>
            <p>Le traitement par voie orale correspond à des médicaments antidiabétique qui peuvent être prescrit à la personne diabétique de type 2 ou prédiabétique<span id="dots"></span><span id="more"> lorsqu’un changement d’habitudes de vie (manger équilibré, faire de l’activité physique)  ne permet pas de maintenir des glycémies près des valeurs normales. Parfois, ces médicaments peuvent être prescrits dès le diagnostic lorsque la glycémie est très élevée.</span></p>
            <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
            <h4><a href="">ALIMENTATION </a></h4>
              <p>Dans la prévention et le traitement du diabète, l’alimentation occupe un rôle central. En effet, une bonne alimentation peut considérablement aider <span id="dots"></span><span id="more">le patient diabétique à obtenir un bon contrôle de sa glycémie</p>
              <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>


        </div>


        </form>

      </div>
    </section><!-- End Appointment Section -->






    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Questions fréquemment posées</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Quels sont les facteurs de risques du diabète de type 2 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Les causes du diabète de type 2 sont nombreuses et, dans bien des cas, c’est la combinaison de plusieurs facteurs qui déclenche l’apparition de la maladie. En voici des exemples :
<br>•	Le sexe : les hommes sont plus vulnérables que les femmes;
<br>•	L’âge : le risque augmente à mesure que l’on vieillit;
<br>•	Le surplus de poids;
<br>•	Le tour de taille élevé, soit la graisse accumulée autour de l’abdomen;
<br>•	Le niveau d’activité physique ;
<br>•	Les habitudes alimentaires;

                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Comment traite-t-on le diabète ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Il existe plusieurs approches de traitement pour le diabète, l’objectif à atteindre est un meilleur contrôle des glycémies.
                  Le traitement du diabète comprend :
                  <br>•	un plan d’alimentation personnalisé
                  <br>•	de l’activité physique
                  <br>•	la prise de médication antidiabétique ou d’insuline, si nécessaire
                  <br>•	une bonne gestion du stress
                  Dans bien des cas, le diabète de type 2 peut être contrôlé en modifiant les habitudes alimentaires et en faisant plus d’activité physique.
                                  </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Peut-on prévenir le diabète ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  On peut prévenir le diabète de type 2 ou en retarder l’apparition en modifiant ses habitudes de vie. Visitez notre site dédié à la prévention.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Est-ce que le diabète se guérit ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Le diabète est une maladie chronique incurable. Par contre, il est possible de le contrôler. </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Quels sont les symptômes ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Les symptômes du diabète peuvent varier d’une personne à l’autre. Dans certains cas, le diabète peut même être présent sans que des symptômes ne soient perçus.
Les symptômes sont :
<br>•	Fatigue, somnolence
<br>•	Augmentation du volume et de la fréquence des urines
<br>•	Soif intense
<br>•	Faim exagérée
<br>•	Perte de poids inexpliquée
<br>•	Vision embrouillée
<br>•	Cicatrisation lente
<br>•	Infection des organes génitaux et de la vessie
<br>•	Picotements aux doigts ou aux pieds
<br>•	Irritabilité

                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Galerie</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6381.735477808169!2d10.18649347424231!3d36.89351220015347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stn!4v1620613429628!5m2!1sfr!2stn" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>tunis</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer un message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/purecounter/purecounter.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script>
  function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}


  </script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>


    </body>
</html>
