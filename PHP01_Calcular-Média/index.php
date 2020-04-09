<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" type="image/png" href="_imgs/favicon.ico" />
    <link rel="Stylesheet" type="text/css" href="myStyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <title>Exercício 01 - PHP</title>
</head>

<body>
    <div>
        <form action="" method="POST">
            <p>
                Nome:<br />
                <input type="text" size="30" name="nome" class="formStyle">
            </p>
            <p>
                Nota 1:<br />
                <input type="text" size="35" name="nota01" class="formStyle">
            </p>
            <p>
                Nota 2:<br />
                <input type="text" size="35" name="nota02" class="formStyle">
            </p>
            <p>
                Nota 3:<br />
                <input type="text" size="35" name="nota03" class="formStyle">
            </p>
            <p class="centro">
                <input type="submit" name="BTEnvia" value="Enviar"  onclick="media();" class="formButton">
                <input type="submit" name="BTApaga" value="Apagar"  onclick="apagar();" class="formButton">
            </p>
        </form>
        <p>
    </div>


    <?php

function media(){
    $nome = "";
    $nota1 = 0;
    $nota2 = 0;
    $nota3 = 0;

    if(isset($_POST["BTEnvia"]))
    {    
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota01'];
        $nota2 = $_POST['nota02'];
        $nota3 = $_POST['nota03'];

        if ($nome == "" || $nota1 == "" || $nota2 == "" || $nota3 == ""){
            echo ("<container class='centroEcho'><p>Preencha as informações acima para calcular a média</p></container>");
        }
        else{
            $media = ($nota1 + $nota2 + $nota3) / 3;
            echo ("<p class='centroEcho'>Nome: $nome <br/>Nota: $media</p>");
        }

    }
}

function apagar(){
    if (isset($_POST["BTApaga"]))
    {
        $nome = "";
        $nota1 = "";
        $nota2 = "";
        $nota3 = "";
        echo ("");
    }
}

media();
apagar();
?>
</body>


</html>