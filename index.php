<?php
    include('conexao.php');

    $consulta = "SELECT * FROM anime ";

    $con = mysqli_query($connect, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Animes list</title>
</head>
<body>
    <nav>
        <a href="add.html">
            <img class="icon" src="https://img.icons8.com/ios-glyphs/30/000000/plus-math.png"/>
        </a>
    </nav>
        <form method="get" action="search.php" style="left: 0;">
            <input type="text" name="busca" placeholder="Pesquisar">
        </form>

    <div class="container">
        <?php
            while($dados = $con->fetch_assoc()){
        ?>

        <div class="card1">
            <div>
                <img class="img" 
                src="<?=$dados['tela']?>" alt="">
            </div>
            <a href="desc.php?descid=<?=$dados['id']?>"><button>Saiba mais</button></a>
        </div>
        
        <?php
        }
        ?>
    </div>


</body>
</html>