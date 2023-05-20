<?php
include "layout-top.php"

?>
<div class="container-fluid p-0 m-0 d-flex">
    <h5 class="white">Filtrar por:</h5><div class="container-fluid p-0 mt-3">
        <a href="" class="btn btn-secondary">HTML</a>
        <a href="" class="btn btn-secondary">CSS</a>
        <a href="" class="btn btn-secondary">JAVASCRIPT</a>
        <a href="" class="btn btn-secondary">PHP</a>
        <a href="" class="btn btn-secondary">REACT</a>
    </div>
</div>

<div class="container-fluid d-flex gap-3 p-3 flex-column">
    <div class="container d-flex gap-3 p-0 flex-wrap">
    <?php foreach($lista as $item): ?>
                <div class='card light-back' style='width: 40%;'>
                <div class='card-body'>
                <h4 class='card-tittle'><?=$item['titulo']?></h4>
                <p class='card-text'><?=$item['texto']?></p>
                <a href="href=<?=route("artigos/{$item['id']}")?>" class='btn btn-primary'>Ler mais</a>
                </div>
                </div>

    <?php endforeach; ?>
    </div>
</div>
