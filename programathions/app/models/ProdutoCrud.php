<?php

    require_once "DBConnection.php";
    require_once "Produto.php";


class ProdutoCrud{

    private $conexao;
    public function __construct(){
        $this->conexao = DBConnection::getConexao();
    }

    public function getProduto(int $id){
        //RETORNA UMA CATEGORIA, DADO UM ID

        //FAZER A CONSULTA
        $sql ='select * from produto where id_produto='.$id;
        $resultado = $this->conexao->query($sql);

        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $produto = $resultado->fetch(PDO::FETCH_ASSOC);
        //CRIAR OBJETO DO TIPO CATEGORIA - USANDO OS VALORES DA CONSULTA
        $objprod = new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto'],
            $produto['preco_produto'], $produto['foto_produto']);

        //RETORNAR UM OBJETO CATEGORIA COM OS VALORES
        return $objprod;

    }

    public function getProdutos(){
        $sql = "SELECT * FROM produto";

        $resultado = $this->conexao->query($sql);

        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        foreach ($produtos as $produto){
            $id = $produto['id_produto'];
            $nome = $produto['nome_produto'];
            $descricao = $produto['descricao_produto'];
            $foto = $produto['foto_produto'];
            $preco = $produto['preco_produto'];

            $obj = new Produto($id, $nome, $descricao, $preco, $foto);
            $listaProdutos[] = $obj;
        }
        return $listaProdutos;
    }

}