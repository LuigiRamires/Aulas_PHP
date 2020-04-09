<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="myStyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Atividade 04 - PHP</title>
</head>

<body>
    <main>
        <h1>RESULTADO FINAL</h1>
        <h3>Os alunos com média igual ou superior estarão automaticamente aprovados!</h3>

        <form method="POST">
            <div class="divnome">
                <br />
                Nome: <input type="text" name="nomealuno" size="40" />
            </div>
            <br />
            <hr />
            <div class="divnotas">
                <br />
                Informe as notas:<br/><br/>
                <input type="number" name="nota01aluno" size="2" min="0" max="10" maxlength="2" placeholder="Nota 1" />
                <input type="number" name="nota02aluno" size="2" min="0" max="10" maxlength="2" placeholder="Nota 2" />
                <input type="number" name="nota03aluno" size="2" min="0" max="10" maxlength="2" placeholder="Nota 3" />
            </div>
            <br/>
            <div class="divbuttons">
                <input type="submit" name="buttonCalcular" value="Calcular" onclick="calcular();">
                <input type="submit" name="buttonApagar" value="Apagar" onclick="apagar();">
            </div>
            <hr/>
        </form>
    </main>

<?php

    function calcular()
    {
        $nome = "";
        $nota01 = 0;
        $nota02 = 0;
        $nota03 = 0;
        
        if (isset($_POST["buttonCalcular"]))
        {
            $nome = $_POST['nomealuno'];
            $nota01 = $_POST['nota01aluno'];
            $nota02 = $_POST['nota02aluno'];
            $nota03 = $_POST['nota03aluno'];

            if ($nome == "" | $nota01 == "" | $nota02 == "" | $nota03 == "")
            {
                echo ("<p>Preencha todas as informações para que o resultado seja exibido.</p>");
            }
            else
            {
                $media = ($nota01 + $nota02 + $nota03) / 3;
                if ($media >= 6)
                {
                    print ("<p>O aluno <span class='pNomeMedia'> $nome</span> obteve a média <span class='pNomeMedia'> $media</span> e consequentemente foi <span class='pAprovado'>APROVADO</span></p>");
                }
                else
                {
                    print ("<p>O aluno<span class='pNomeMedia'> $nome</span> obteve a média<span class='pNomeMedia'> $media</span> e consequentemente foi <span class='pReprovado'>REPROVADO</span></p>");
                }
            }
        }
    }

    function apagar(){
        if (isset($_POST["buttonApagar"]))
        {
            $nome = "";
            $nota01 = "";
            $nota02 = "";
            $nota03 = "";
            echo ("");
        }
    }

    calcular();
    apagar();
?>

</body>

</html>