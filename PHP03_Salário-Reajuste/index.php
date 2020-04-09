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
                Nome: <input type="text" name="nomefunc" size="40" />
            </div>
            <br />
            <hr />
            <div class="divnotas">
                <br />
                Informe as notas:<br/><br/>
                <input type="number" name="salariofunc" size="6" min="400" max="100000" maxlength="6" placeholder="Salário" />
                <input type="number" name="reajsalariofunc" size="3" min="0" max="100" maxlength="3" placeholder="Reajuste" />
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
        $nomefunc = "";
        $salariofunc = 0;
        $reajsalariofunc = 0;
        
        if (isset($_POST["buttonCalcular"]))
        {
            $nomefunc = $_POST['nomefunc'];
            $salariofunc = $_POST['salariofunc'];
            $reajsalariofunc = $_POST['reajsalariofunc'];

            if ($nomefunc == "" | $salariofunc == "" | $reajsalariofunc == "")
            {
                echo ("<p>Preencha todas as informações para que o resultado seja exibido.</p>");
            }
            else
            {
                $porcentagem =  $salariofunc * ($reajsalariofunc / 100);
                $resultado = $salariofunc + $porcentagem;

                print ("<p>O funcionário <span class='pNomeMedia'> $nomefunc</span> obteve o reajuste de <span class='pNomeMedia'> $porcentagem</span> e obtendo um novo salário de <span class='pNomeMedia'> $resultado</span>.</p>");
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