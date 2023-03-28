<html>
    <head>
        <title>volume</title>
    </head>
    <body>
        <h1>Nicolas bueno</h1>
		<h2>Volume<h2>
            <form method="post">
                <input type="text" name="raio" placeholder="Raio"/>
                <input type="text" name="altura" placeholder="Altura"/>
                <input type="submit"  value="Calcular">
            </form>
        <?php
            $pi=3.14;
            $raio=$_POST["raio"];
            $altura=$_POST["altura"];
            $raio1=$raio*$raio;
            $r=$pi*$raio1*$altura;
            echo "$r";
            
        ?>
    </body>
</html>