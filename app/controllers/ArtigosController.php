<?php
use models\Artigo;

class ArtigoaController {
	function index($id = null){

		#variáveis que serao passados para a view
		$send = [];

		#cria o model
		$model = new Artigo();
		
		
		$send['data'] = null;
		#se for diferente de nulo é porque estou editando o registro
		if ($id != null){
			#então busca o registro do banco
			$send['data'] = $model->findById($id);
		}

		#busca todos os registros
		$send['lista'] = $model->all();

		#chama a view
		render("artigos", $send);
	}

	
	function salvar($id=null){

		$model = new Artigo();
		
		if ($id == null){
			$id = $model->save($_POST);
		} else {
			$id = $model->update($id, $_POST);
		}
		
		redirect("artigos/index/$id");
	}

	function deletar(int $id){
		
		$model = new Artigo();
		$model->delete($id);

		redirect("artigos/index/");
	}


}
