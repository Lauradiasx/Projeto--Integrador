<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(5, 5, 5), rgb(144, 138, 144));
        }
        div{
            background-color: rgba(16, 15, 17, 0.9);
            position: absolute;
            top: 50%; 
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 20px;
            color: rgb(231, 227, 231);
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 18px;
        }
        button{
            background-color: rgba(251, 254, 255, 0.897);
            border: none;
            padding: 18px;
            width: 100%;
            border-radius: 30px;
            color: rgb(8, 8, 8);
            font-size: 15px;
           
        }
        button:hover{
            background-color: rgb(8, 8, 8));
            cursor: pointer;
        }
    </style>
</head>
<body>
<a href="config2.php">Voltar</a>
      <div>
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Enviar</button>
    </div> 
</body>
</html>