<?php

    if (isset($_POST['submit']))
    {


        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha= $_POST['senha'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco']
        $cidade =  $_POST['cidade']
        $estado =  $_POST['estado']
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,cep) 
        VALUES ('$nome','$email',,'$senha','$cidade','$estado','$endereco')");

        header('Location: tela de login.php');
    }