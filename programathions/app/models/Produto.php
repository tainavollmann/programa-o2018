<?php

	class Produto{

		private $id; 
		private $nome;
		private $descricao;
		private $preco;
		private $foto;
		private $id_categoria;


		public function __construct($id=null, $nome=null, $descricao=null, $preco=null, $foto=null, $id_categoria=null){
	       
	       $this->id = $id;
	       $this->nome = $nome;
	       $this->descricao = $descricao;
	       $this->preco = $preco;
	       $this->foto = $foto;
	       $this->id_categoria = $id_categoria;


	    }

		public function getId(){
        	return $this->id;
	    }

	    public function setId($id){
	        $this->id = $id;
	    }

	    public function getNome(){
	        return $this->nome;
	    }

	    public function setNome($nome){
	        $this->nome = $nome;
	    }

	    public function getPreco(){
	        return $this->preco;
	    }

	    public function setPreco($preco){
	        $this->nome = $preco;
	    }

	    public function getDescricao(){
	        return $this->descricao;
	    }

	    public function setDescricao($descricao){
	        $this->descricao = $descricao;
	    }

	    public function getFoto(){
	    	return $this->foto;
	    }

	    public function setFoto($foto){
	    	$this->foto = $foto;
	    }

	    public function getIdcategoria(){
	        return $this->id_categoria;
	    }

	    public function setIdcategoria($id_categoria){
	        $this->id_categoria = $id_categoria;
	    }


	}