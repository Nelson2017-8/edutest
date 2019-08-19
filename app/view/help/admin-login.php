<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?php echo name; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="<?= keyword; ?>">
    <meta name="description" content="Pagina de Registro de Usuario en <?= name; ?> (<?= url; ?>).">
    <meta name="author" content="<?= autor; ?>">
    <!-- Le styles -->
    <link rel="stylesheet" href="<?= bootstrapCss; ?>">
    <link rel="stylesheet" href="<?= bootstrapFont; ?>">
    <link rel="stylesheet" href="<?= assets.'css/alert.css'; ?>">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <style>
      .scrollspy-admin{
        position: fixed;
        padding-right: 2em;
        top: 5em;
        bottom: 0;
      }
    </style>
  </head>
  <body>

  <div class="bd-example">
    <nav id="navbar-example2" class="navbar fixed-top navbar-dark bg-dark shadow">
      <div class="container">
        <a class="navbar-brand" href="<?= url; ?>"><?= logo; ?> <span class="text-muted">/ Admin</span></a>
        <ul class="nav nav-pills">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Manual</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Acceso Admin</a>
              <a class="dropdown-item" href="#">¿Como Usar?</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Contactar</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link text-white" href="#">Soporte</a> </li>
          <li class="nav-item"> <a class="nav-link btn btn-primary" href="#"><i class="glyphicon glyphicon-earphone mr-2"></i>Contactar</a> </li>
        </ul>
      </div>
    </nav>
    <main class="mt-5 py-5 px-3">
      <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="float-left col-9 col-md-6 col-lg-9 scrollspy-example">
        <h4 class="text-primary" id="access-admin">@Access Admin</h4>
        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
        <h4 class="text-primary" id="first-paso">@Primer Paso</h4>
        <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
        <h4 class="text-primary" id="scrollspy-1">@Crear un Test</h4>
        <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
        <h4 class="text-primary" id="scrollspy-2">@Iniciar un Test</h4>
        <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
        <h4 class="text-primary" id="scrollspy-3">@Contabilizar Test</h4>
        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
        <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
        </p>
        <h4 class="text-primary" id="scrollspy-4">@Exportar Resultados de un Test</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe accusamus, iusto corporis, autem assumenda voluptates quisquam, sed repudiandae architecto sapiente harum porro odit ex quasi quos. Natus doloribus amet accusamus asperiores sunt dolores eum veniam odit, illum minus rerum expedita laudantium, eos! Debitis repellendus reprehenderit vitae, alias ut magnam repudiandae asperiores vero illo quis sint molestiae quia adipisci non voluptatibus dolores atque modi ipsam praesentium labore nostrum quidem laboriosam quam. Magni minus, at. Doloremque accusantium temporibus nobis earum, quibusdam quo optio neque, doloribus adipisci sequi ipsa reiciendis ea ratione repudiandae pariatur numquam, nam consequuntur nulla. Architecto perferendis vitae harum quam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque enim, totam mollitia porro error nemo obcaecati officiis vero. Obcaecati molestiae dolor excepturi inventore exercitationem beatae earum ut architecto provident magni.</p>
      </div>
      <div class="float-left col-3 col-md-6 col-lg-3">
        <div class="scrollspy-admin">
          <ul class="list-group-flush list-unstyled">
            <li class="list-group-item disabled">Guía del Administrador</li>
            <li class="list-group-item"><a class="scrollspy" href="#access-admin">Access Admin</a></li>
            <li class="list-group-item"><a class="scrollspy" href="#first-paso">Primer Paso</a></li>
            <li class="list-group-item"><a class="scrollspy" href="#scrollspy-1">Crear un Test</a></li>
            <li class="list-group-item"><a class="scrollspy" href="#scrollspy-2">Iniciar un Test</a></li>
            <li class="list-group-item"><a class="scrollspy" href="#scrollspy-3">Contabilizar Test</a></li>
            <li class="list-group-item"><a class="scrollspy" href="#scrollspy-4">Exportar Resultados de un Test</a></li>
          </ul>
        </div>
      </div>
    </main>
  </div>

    <script src="<?= jquery; ?>"></script>
    <script src="<?= url.'/assets/framework/bootstrap_4/js/popper.js'; ?>"></script>
    <script src="<?= bootstrapJs; ?>"></script>
    <script src="<?= assets.'js/alert.js'; ?>"></script>
    <script>
      $(document).ready(function() {
        $("a[href='#']").click(function(e) {
          e.preventDefault();
        });
        $("a.scrollspy").click(function(e) {
          e.preventDefault();
          var id = $(this).attr('href');
          window.scroll(0, $(id).offset().top - 80 );
        });
      });
    </script>
  </body>
</html>
