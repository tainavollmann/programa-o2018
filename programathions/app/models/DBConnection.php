<?php
class DBConnection {

    const HOST      = "localhost";
    const NOMEBANCO = "3info1";
    const USUARIO   = "3info1";
    const SENHA     = "3info1";

    //!!!Substitua daqui para baixo
    public static $conexao = null;
    public static function getConexao(){

        try{
            if(self::$conexao == null){
                self::$conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$conexao;

        }catch(PDOException $e){
            die("Falhou a conexao ou ocorreu um erro banco: " . $e->getMessage());
        }
        return $conexao;
    }

}// class ends
?>