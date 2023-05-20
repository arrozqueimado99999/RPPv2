<?php

namespace models;

class Artigo extends Model {

    protected $table = "artigos";
    #nao esqueça da ID
    protected $fields = ["id","titulo","texto"];
    
    
    
}

