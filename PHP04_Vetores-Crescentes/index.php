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
        <h1>NÚMEROS CRESCENTES</h1>
        <h3>Os números serão exibidos do menor para o maior!</h3>

        <form method="POST">
            <hr />
            <div class="divnum">
                <br />
                Informe as notas:<br/><br/>
                <input type="number" name="num01" size="5" placeholder="Número 1" />
                <input type="number" name="num02" size="5" placeholder="Número 2" />
                <input type="number" name="num03" size="5" placeholder="Número 3" />
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
        $num01 = 0;
        $num02 = 0;
        $num03 = 0;
        
        if (isset($_POST["buttonCalcular"]))
        {
            $num01 = $_POST['num01'];
            $num02 = $_POST['num02'];
            $num03 = $_POST['num03'];

            if ($num01 == "" | $num02 == "" | $num03 == "")
            {
                echo ("<p>Preencha todas as informações para que o resultado seja exibido.</p>");
            }
            else
            {
                $organizacao = array($num01, $num02, $num03);
                asort($organizacao);
                echo ("<center><p>Os números abaixo serão exibidos em <span class='pNomeMedia'>ordem crescente</span>.</p></center>");
                foreach ($organizacao as $ordem => $org) 
                {
                    echo ("<center>Vetor<span class='pNomeMedia'>[" . $ordem . "]</span> = <span class='pNomeMedia'>" . $org . "</span>\n</center>");
                }
            }
        }
    }

    function apagar(){
        if (isset($_POST["buttonApagar"]))
        {
            $num01 = "";
            $num02 = "";
            $num03 = "";
            echo ("");
        }
    }

    calcular();
    apagar();
?>

</body>

</html>