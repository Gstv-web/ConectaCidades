<?php

        $user = "root";
        $password = "larevancha666";
        $dataBase = "db_conectacidades";
        $host = "localhost";

        $link = mysqli_connect($host, $user, $password, $dataBase) or die ("Erro de conexão");



        if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $query = "INSERT INTO tb_formulario (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
            $result = mysqli_query($link, $query);

            header("Location: http://localhost:3000/videos.html");
        } else {
            echo "<script>alert('nem apareceu o alert aqui');</script>";
            header ("Location: http://localhost:3000/index.php");
        }

    ?>