<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio array e repetição</title>
</head>
<body>
    
    <form action="index.php" method="POST">
        <label>Nome:</label> <input type="text" name="nome"> <br/><br/>
        <label>Ano:</label>
    
        <select name="select">

        <?php
            $ano = 1980;
            
                while ($ano <= 2020) {
                    echo "<option value='$ano'>$ano</option>";
                    $ano = $ano + 1;
                }
        ?>

        </select> <br/><br/>
        <button>Cadastrar</button>
        
    </form>
</body>
</html>