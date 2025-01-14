<?php
    // require_once("/model/produtosdao.php");
    // $dados = produtos_dao::retorna_produto();
    require_once("dados.php");
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receber Dados JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
<body>
<!-- <h1>Dados recebidos do PHP:</h1> -->
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">Imagem</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?=$texto?>
    </tbody>
  </table>
</body>
</html>
