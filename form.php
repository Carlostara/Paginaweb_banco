<?php include("head.php") ?>

<div class="container">
    <div class="header">
        <div class="nav__bar1">
            <nav>
                <a href="index.php">inicio</a>
                <a href="">Personas</a>
                <a href="">empresa</a>
                <a href="">atención al cliente</a>
                <a href="form.php">Simulador Creditos </a>


            </nav>
        </div>
        <div>
            <img class="logo1" src="imagenes/meza verde.png">
            <h1 class="texto">"Confianza en nuestras manos"</h1>
        </div>

    </div>


    <form action="Script.php" method="POST">
        <h2>simulador de prestamo</h2>
        <fieldset>

            <legend>ingresa datos</legend>

            <label for="valorprestamo"> valor de prestamo </label>
            <input type="number" name="valorprestamo" > <br> <br>

            <label>numero de cuotas</label>
            <select name="cuotas">
                <option value="6">6</option>
                <option value="12">12</option>
                <option value="18">18</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
                <option value="60">60</option>
            </select>

            <br>
            <br>
            <input type="submit" name="cotizar" value="cotizar">


        </fieldset>
        <br>
    </form>

</div>