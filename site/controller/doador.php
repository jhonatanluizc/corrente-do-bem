<?php
$op = $_GET["op"];

if ($op == "cadastro") {
    //nome, data, endereco, telefone, descricaoitens
    $data = array(
        "nome" => $_POST["nome"],
        "data" => $_POST["data"],
        "endereco" => $_POST["endereco"],
        "telefone" => $_POST["telefone"],
        "descricaoitens" => $_POST["descricaoitens"]
    );

    require_once("../model/doador.php");
    $doador = new Doador();
    $doador->create($data);

?>
    <script>
        alert("Sua doação foi cadastrada, em breve entraremos em contato");
        window.location.href = "../index.php";
    </script>
<?php
}
?>