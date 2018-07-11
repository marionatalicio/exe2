<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 11/07/18
 * Time: 13:09
 */
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<h1>Digite o Endereço IP e a Máscara em Bits</h1>


<div class="row">
    <form class="col s12" action="controlador.php" method="POST">
        <div class="input-field col s6">
            <input placeholder="IP" id="first_name" type="text" class="validate" name="IP">
            <label for="IP">IP</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Placeholder" id="" type="text" class="validate" name="mascara">
            <label for="mascara">Máscara</label>
        </div>

        <input type="submit" class="btn waves-effect waves-light">

    </form>
</div>

</body>
</html>

