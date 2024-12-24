<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiNotebooks</title>
</head>
<body>
    <?php require_once 'includes/lojas.php' ?>
    <?php 
    $n = $_POST['nome'];
    $e = $_POST['especificacoes'];
    $p = $_POST['preco'];
    $i = $_POST['imagem'];
    if ($l->query("INSERT INTO `notebook` (`id`, `nome`, `especificações`, `imagem`, `preço`) VALUES (DEFAULT, '$n', '$e', '$i', '$p')") == true){
        echo "notebook adcionado com sucesso";
    } else {
        echo 'erro ao inserir dados';
    }
    ?>
</body>
</html>