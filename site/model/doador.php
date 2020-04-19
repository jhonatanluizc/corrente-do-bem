<?php
require_once("database.php");

//doador (nome, data, endereco, telefone, descricaoitens

class Doador
{
    function create($doador)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO doadores (nome, data, endereco, telefone, descricaoitens)
            VALUES (:nome, :data, :endereco, :telefone, :descricaoitens)");

        $connection->prepare($sql)->execute($doador);
    }

    function select_where($where)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from doadores $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {
            $data = array(
                "id" => $row['id'],
                "nome" => $row['nome'],
                "data" => $row['data'],
                "endereco" => $row['endereco'],
                "telefone" => $row['telefone'],
                "descricaoitens" => $row['descricaoitens']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }

    function update($doador)
    {
        $database = new Database();
        $connection = $database->connection();
    
        $id = $doador['id'];
        $nome = $doador['nome'];
        $data = $doador['data'];
        $endereco = $doador['endereco'];
        $telefone = $doador['telefone'];
        $descricaoitens = $doador['descricaoitens'];

        $stmt = $connection->prepare('UPDATE doadores SET nome = :nome, data = :data, endereco = :endereco, telefone = :telefone, descricaoitens = :descricaoitens WHERE id = :id');
        $stmt->execute(array(
            ':nome' => $nome,
            ':data' => $data,
            ':endereco' => $endereco,
            ':telefone' => $telefone,
            ':descricaoitens' => $descricaoitens,
            ':id' => $id
        ));
    }
}
