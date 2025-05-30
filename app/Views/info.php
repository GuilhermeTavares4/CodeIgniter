<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./info.css">
</head>
<body>
<div class="container">
    <form action="formdata" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco">
        </div>
        <div>

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade">
        </div>
        <div>
            <input type="submit" name="submit" value="enviar">
        </div>

    </form>
    <table> 
        <caption>Peças</caption>
        <tr> 
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th></th>
        </tr>
        <?php
        foreach ($resultado as $row) {
            echo "<tr> <td> {$row['nome']} </td>
                  <td> {$row['preco']} </td>
                  <td> {$row['quantidade']} </td>
                  <td>
                  
                  <form action='delete' method='post'> 
                  <input type='hidden' name='hidden_value' value='{$row['id']}'>
                  <input type=submit name='enviar_delete' value='X'>
                  </form>
                  
                  
                  </td>
                  </tr>";
        } 
        ?>
    </table>
</div>
</body>
</html>