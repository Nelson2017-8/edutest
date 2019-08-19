<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> -->
<nav class="navbar navbar-expand-md navbar-dark gradient-45deg-deep-orange-orange justify-content-end">
  <div class="container">
  	<a class="navbar-brand" href="<?= url; ?>"><?= logo; ?></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	    <ul class="navbar-nav">
	      <li class="nav-item active"> <a class="nav-link" href="<?= url."home"; ?>">Inicio <span class="sr-only">(current)</span></a> </li>
	      <li class="nav-item"> <a class="nav-link" href="<?= url; ?>">Registro</a> </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Información </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?= url; ?>">Action</a>
	          <a class="dropdown-item" href="<?= url; ?>">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?= url; ?>">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item"> <a class="nav-link" href="<?= url; ?>">Sobre Nosotros</a> </li>
	    </ul>
	  </div>
  </div>
</nav>