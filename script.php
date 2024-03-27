<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="estilo.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body class="fundo">
<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
    <div class="nota">
      <div class="titulo">Nota Fiscal</div>
      <div class="texto">
      <?php
        $nmCliente = $_POST['nmCliente'];
        $vlProduto1 = $_POST['vlProduto1'];
        $vlProduto2 = $_POST['vlProduto2'];
        $vlTotal = $_POST['vlTotal'];
        $nmProduto1 = $_POST['nmProduto1'];
        $nmProduto2 = $_POST['nmProduto2'];
        $qtGasta =  $vlProduto1 + $vlProduto2;
        $troco = $vlTotal - $qtGasta;

echo"Nome: $nmCliente";
echo"<br><br>";   
echo"Nome 1ºProduto: $nmProduto1";
echo"<br><br>";   
echo"Valor 1ºProduto $vlProduto1";
echo"<br><br>";   
echo"Nome 2ºProduto: $nmProduto2";
echo"<br><br>";   
echo"Valor 2ºProduto $vlProduto2";
echo"<br><br>";   
echo"Valor Total: $vlTotal R$";
echo"<br><br>";
echo"Valor gasto: $qtGasta R$";
echo"<br><br>";
echo"Troco: $troco R$";


?>
      </div>
   </div>
    </div>
    <div class="col-sm">

    </div>
  </div>
</div>
</body>
</html>
