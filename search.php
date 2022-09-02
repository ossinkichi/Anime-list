<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Animes</title>
</head>
<body>

    <nav>
        <a style="margin-top: .9375rem;" href="index.php">
                <img src="https://img.icons8.com/external-others-inmotus-design/40/000000/external-Back-round-icons-others-inmotus-design.png"/>
        </a>
    </nav>

    <form method="get" action="search.php">
        <input type="text" name="busca" placeholder="Pesquisar" value="<?=$_GET['busca']?>">
    </form>

    <?php
    if(!isset($_GET['busca'])){

        echo "<p>Resultado não encontrado</p>";

        }else{

            $pesquisa = $connect->real_escape_string($_GET['busca']);

            $sql = "SELECT * FROM anime  WHERE titulo LIKE '%$pesquisa%'";

            $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if($query->num_rows == 0){
                ?>
                <h3 style="color: red; margin-left: 31.25rem; margin-top: 12.5rem; background: rgba(144, 144, 144, 0.612);width: 15.625rem; border:1px solid black; padding: .4375rem .625rem; text-align: center;">
                    Resultado ão encontrado
                </h3>
                <?php
            }
    ?>

    <div class="container">
        <?php
           while($dados = $query->fetch_assoc()){
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
        }
        ?>
    </div>

</body>
</html>