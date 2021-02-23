<?
    public function Deletar($cod) {
    try {
        $sql = "DELETE FROM usuario WHERE cod_usuario = :cod";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":cod", $cod);

        return $p_sql->execute();
    } catch (Exception $e) {
        print "Ocorreu um erro ao tentar executar esta ação, foi gerado
um LOG do mesmo, tente novamente mais tarde.";
        GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
    }
}
/*O PDO é criado no arquivo conexao.php, por isso utilizamos o código Conexao::getInstance()->prepare($sql), é nesta linha que ao mesmo tempo que capturamos a instância do PDO da memória, já passamos a ele o SQL a ser preparado. O PDO irá pegar sua SQL e implementar os escapes necessários e segurança necessária. A única coisa que você precisará fazer é passar os parâmetros definidos no SQL com o método bindValue e executar sua Query com o método execute().*/
?>