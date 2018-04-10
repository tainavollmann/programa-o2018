<?php
require_once 'DBConnection.php';
require_once 'Categoria.php';

class CategoriaCrud{
    //SEMPRE QUE A CLASSE FOR INSTANCIADA, JA FAZ A CONEXÃO E GUARDA
    private $conexao;
    public function __construct(){
        $this->conexao = DBConnection::getConexao();
    }

    public function getCategoria(int $id){
        //RETORNA UMA CATEGORIA, DADO UM ID

        //FAZER A CONSULTA
        $sql ='select * from categoria where id_categoria='.$id;
        $resultado = $this->conexao->query($sql);

        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $categoria = $resultado->fetch(PDO::FETCH_ASSOC);
        //CRIAR OBJETO DO TIPO CATEGORIA - USANDO OS VALORES DA CONSULTA
        $objcat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);

        //RETORNAR UM OBJETO CATEGORIA COM OS VALORES
        return $objcat;

    }

    public function getCategorias(){
        $sql = "SELECT * FROM categoria";

        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        foreach ($categorias as $categoria){
            $id = $categoria['id_categoria'];
            $nome = $categoria['nome_categoria'];
            $descricao = $categoria['descricao_categoria'];

            $obj = new Categoria($id, $nome, $descricao);
            $listaCategorias[] = $obj;
        }
        return $listaCategorias;
    }

    public function insertCategoria(Categoria $cat){

        $sql = "INSERT INTO categoria (nome_categoria, descricao_categoria) VALUES ('".$cat->getNome()."','".$cat->getDescricao()."')";

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function upadateCategoria(Categoria $cat){
        
        $sql = "UPDATE categoria SET (nome_categoria = '".$cat->getNome()."', descricao_categoria = '".$cat->getDescricao()."') WHERE id_categoria =".$cat->getId();

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteCategoria(int $id){

        $sql = "DELETE FROM categoria WHERE id_categoria=".$id;

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e;
        }
    }
}