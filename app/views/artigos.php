<?php include 'layout-top.php' ?>

<div class="container d-flex flex-column gap-3 mt-4">
        <div class="light-back container border rounded p-3 d-flex gap-3 justify-content-start flex-column">
            <h3>Escrever artigo</h3>
            <form action="<?=route('artigos/salvar/'._v($data,"id"))?>" method="post">
            <input type="text" required class=" mb-2 form-control" placeholder="Título" name="titulo" id="titulo" value="<?=_v($data,"titulo")?>">
            <textarea placeholder="Digite o texto aqui" name="texto" required class="mb-2 form-control" id="texto" cols="30" rows="10"><?=_v($data,"texto")?></textarea>                <input type="submit" class="btn btn-primary" value="Salvar e enviar">
            <a class='btn btn-secondary' href="<?=route("artigos")?>">Novo artigo</a>
            </form>
        </div>
</div>

<div class="container-fluid d-flex gap-3 p-3 flex-column">
    <h3 class="white">Todos os artigos</h3>
    <div class="container d-flex gap-3 p-0 flex-wrap">
    <?php foreach($lista as $item): ?>
                <div class='card light-back' style='width: 25rem;'>
                <div class='card-body'>
                <h4 class='card-tittle'><?=$item['titulo']?></h4>
                <p class='card-text'><?=$item['texto']?></p>
                <button class='btn btn-primary'>Ler mais</button>
                <a class="btn btn-secondary" href='<?=route("artigos/index/{$item['id']}")?>'>Editar</a>
                <a class="btn btn-secondary" href='<?=route("artigos/deletar/{$item['id']}")?>'>Deletar</a>
                </div>
                </div>

    <?php endforeach; ?>
    </div>
</div>

<?php include 'layout-bottom.php' ?>