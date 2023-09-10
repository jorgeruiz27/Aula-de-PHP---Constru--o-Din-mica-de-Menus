<?php 
    include "./sistema/configuracao.php";
    $sql = "SELECT * FROM cidades WHERE id_estado = ".$_POST['estado'];
    $res = $conn->query($sql);
    $cidades = $res->fetchAll(\PDO::FETCH_OBJ);

    echo json_encode($cidades);
?>
