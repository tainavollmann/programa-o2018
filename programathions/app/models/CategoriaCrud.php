<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/03/18
 * Time: 16:01
 */

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

    }

    //FAZER TESTES DAS FUNÇÕES NO ARQUIVO DE TESTES
}