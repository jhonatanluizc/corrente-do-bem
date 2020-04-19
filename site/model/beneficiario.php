<?php
require_once("database.php");

class Beneficiario
{
    function create($beneficiario)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO beneficiarios (nome, datanascimento, cpf, nomemae, telefone, endereco)
            VALUES (:nome, :datanascimento, :cpf, :nomemae, :telefone, :endereco)");

        $connection->prepare($sql)->execute($beneficiario);
    }

    function select_where($where)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from beneficiarios $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {
            $data = array(
                "id" => $row['id'],
                "nome" => $row['nome'],
                "datanascimento" => $row['datanascimento'],
                "cpf" => $row['cpf'],
                "nomemae" => $row['nomemae'],
                "telefone" => $row['telefone'],
                "endereco" => $row['endereco']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
    function update($beneficiario)
    {
        $database = new Database();
        $connection = $database->connection();
  
        $id = $beneficiario['id'];
        $nome = $beneficiario['nome'];
        $datanascimento = $beneficiario['datanascimento'];
        $cpf = $beneficiario['cpf'];
        $nomemae = $beneficiario['nomemae'];
        $telefone = $beneficiario['telefone'];
        $endereco = $beneficiario['endereco'];

        $stmt = $connection->prepare('UPDATE beneficiarios SET nome = :nome, datanascimento = :datanascimento, cpf = :cpf, nomemae = :nomemae, telefone = :telefone, endereco = :endereco WHERE id = :id');
        $stmt->execute(array(
            ':nome' => $nome,
            ':datanascimento' => $datanascimento,
            ':cpf' => $cpf,
            ':nomemae' => $nomemae,
            ':telefone' => $telefone,
            ':endereco' => $endereco,
            ':id' => $id
        ));
    }
}
