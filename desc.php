<?php
    include('conexao.php');

    if(!empty($_GET['descid'])){

        $id = $_GET['descid'];

        $consulta = "SELECT * FROM anime WHERE id = $id";

        $con = $connect->query($consulta);

        if($con->num_rows > 0){
            while($dados = mysqli_fetch_assoc($con)){
                $img = $dados['tela'];
                $title = $dados['titulo'];
                $desc = $dados['descricao'];
                $year = $dados['ano'];
                $eps = $dados['eps'];
            }
        }else{
            header('locatio: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>cards</title>
</head>
<body>
    <nav>
        <a style="margin-top: 15px;" href="index.php">
            <img src="https://img.icons8.com/external-others-inmotus-design/40/000000/external-Back-round-icons-others-inmotus-design.png"/>
        </a>
    </nav>

    <div class="card2">
        <div class="flex">
            <div>
                <img src="<?=$img?>" alt="" class="img2">
            </div>
            <div class="desc">
                <P>
                    <?=$desc?>
                </P>
            </div>
        </div>
        <div class="adc">
            <h4><?=$title?></h4>
            <div class="adi">
                <p>Lançado em : <?=$year?> </p>
                <p>Episodios : <?=$eps?> </p>
            </div>
        </div>
    </div>
</body>
</html>