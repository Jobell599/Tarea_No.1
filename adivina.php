<?php require('partes/head.php'); ?>


<h3>Adivina el número que se mostrará del 1 al 5</h3>

<form method="get" action="">
    <input type="number" name="txtCreo" style="width:400px;" required id="numero" min="1" max="5" placeholder="Escribe un numero del 1 al 5"
    value="<?= isset($_GET['txtCreo']) ? $_GET['txtCreo'] : ''; ?>" />
<button type="submit">Enviar</button>
</form>

<?php
    if(isset($_GET['txtCreo'])) {
        $numero = $_GET['txtCreo'];
        $aleatorio = rand(1, 5);
        if ($numero == $aleatorio) {
            echo "<h3>Felicidades! Acabas de adivinar el número mostrado: $aleatorio</h3>";
        } else {
            echo "<h3>Lo siento, el número era: $aleatorio</h3>";
        }
    }
?>

<?php require('partes/foot.php'); ?>