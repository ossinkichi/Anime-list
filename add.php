<?php
    include('conexao.php');

    if(isset($_POST['image']) && isset($_POST['titulo']) && isset($_POST['ano']) && isset($_POST['eps']) && isset($_POST['descri'])){
        
        $img = $_POST['image'];
        $title = $_POST['titulo'];
        $desc = $_POST['descri'];
        $year = $_POST['ano'];
        $eps = $_POST['eps'];

        $inject = "INSERT INTO anime(tela, titulo, descricao, ano, eps) VALUES('$img', '$title', '$desc', '$ano', $eps)";

        $query = mysqli_query($connect, $inject) or die("Falha ao cadastrar".mysqli_error($connect));

        header('location: index.php');
        
    }
?>