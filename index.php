<?php 
    include "./sistema/configuracao.php";
    $sql = "SELECT * FROM estados";
    $res = $conn->query($sql);
    $estados = $res->fetchAll(\PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="estado" id="idEstado">
        <option value="">Selecionar o Estado</option>
        <?php foreach ($estados as $estado) { ?>
            <option value="<?php echo $estado->id ?>"><?php echo $estado->nome; ?></option>
        <?php } ?>
    </select>
    
    <br><br>

    <select name="cidade" id="idCidade" disabled>
        <option value="">Selecionar a Cidade</option>
    </select>
</body>
<script src="./js/script.js"></script>
</html>
