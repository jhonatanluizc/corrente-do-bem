<?php
    $op = $_GET["op"];

    if ($op == "cadastro") { 
       //nome, datanascimento, cpf, nomemae, telefone, endereco
       $data = array(
        "nome" => $_POST["nome"],
        "datanascimento" => $_POST["datanascimento"],
        "cpf" => $_POST["cpf"],
        "nomemae" => $_POST["nomemae"],
        "telefone" => $_POST["telefone"],
        "endereco" => $_POST["endereco"] 
       );

       require_once("../model/beneficiario.php"); 
       $beneficiario = new Beneficiario();
       $beneficiario->create($data);

       ?>
            <script>
                    alert("Sua requisição foi enviada, em breve entraremos em contato");
                    javascript: history.go(-1);
            </script>
        <?php
    }
?>