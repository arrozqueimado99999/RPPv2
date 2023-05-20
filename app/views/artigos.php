<?php include 'layout-top.php' ?>

<div class="container-fluid d-flex flex-column gap-3 p-3">
        <div class="container-md border rounded p-3 d-flex gap-3 justify-content-start flex-column">
            <h3 class="tittle">Escrever artigo</h3>
            <form action="escrita.php" method="post">
            <input type="text" required class="form-control" placeholder="Título" name="titulo" id="titulo" value="<?=_v($data,"titulo")?>">
            <textarea name="texto" value="<?=_v($data,"texto")?> required style="resize: none;" class="form-control" placeholder="Digite seu texto" id="texto" cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-primary" value="Salvar e enviar">
            </form>
        </div>
</div>

<form method='POST' action='<?=route('artigos/salvar/'._v($data,"id"))?>'>

<label class='col-md-6'>
    Título
    <input type="text" class="form-control" name="nome" value="<?=_v($data,"nome")?>" >
</label>

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("artigos")?>">Novo</a>

</form>

    <?php foreach($lista as $item): ?>
                <div class='card light-back' style='width: 25rem;'>
                <div class='card-body'>
                <h4 class='card-tittle'><?=$item['titulo_artigo']?></h4>
                <p class='card-text'><?=$item['exto']?></p>
                <button class='btn btn-primary'>Ler mais</button>
                <a href='<?=route("artigos/index/{$item['id']}")?>'>Editar</a>
                <a href='<?=route("artigos/deletar/{$item['id']}")?>'>Deletar</a>
                </div>
                </div>";

    <?php endforeach; ?>

<?php include 'layout-bottom.php' ?>