<?php
namespace src\app\model;

abstract class ProdutoModel
{
    
    public function create(){
        $em = getEntityManager();
        //setAtributo
        $em->persit($produto);
        $em->flush();
    }
    
    public function listar() {
        
    }
    
    public function update(){
        
    }
    
    public function delete(){
        
    }
    
}

