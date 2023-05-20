<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo artigo</title>
    <link rel="stylesheet" href="<?=assets('bootstrap/css/bootstrap.min.css')?>" />
    <script src="<?=assets('bootstrap/js/bootstrap.bundle.min.js')?>" ></script>
	<script src="<?=assets('js/jquery.js')?>" ></script>
	<script src="<?=assets('js/jquery.mask.min.js')?>" ></script>
	<script src="<?=assets('js/form.js')?>" ></script>

    <link rel="stylesheet" href="<?=assets('css/dark-mode.css')?>" />
</head>
<body>

<nav class="navbar p-0 navbar-expand-lg navbar-dark bg-dark sticky-top margin-bottom-2">
      <div class="container-fluid light-back p-2">
        <a class="navbar-brand" href="<?=route("feed")?>">
          <img src="/public/imgs/devlogo.png" alt="devlearn_logobrand" style="height: 25px; width: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=route("artigos")?>">Escrever artigo</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>

<div class="container">