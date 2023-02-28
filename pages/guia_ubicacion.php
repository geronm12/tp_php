<?php
require("./base/header.php");
require("./navbar.php");
?>
<div class="d-flex justify-content-center">
    <div class="box text-center">
        <h5>Instrucciones para obtener la ubicación</h5>
        <div class="card">
            <div class="card-header">
                <span><b>1</b></span>
            </div>
            <div class="card-body">
                <p>Ir hasta google y buscar la dirección que deseamos obtener, acto seguido haremos click donde dice "Maps".</p>
                <img class="tutorial-imagen" src="../img/a.png" />
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-header">
                <span><b>2</b></span>
            </div>
            <div class="card-body">
                <p>Una vez que estemos en la pestaña de maps debemos hacer click en donde dice "Compartir".</p>
                <img class="tutorial-imagen" src="../img/b.png" />
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-header">
                <span><b>3</b></span>
            </div>
            <div class="card-body">
                <p>Desde la pantalla de compartir deberemos hacer click donde dice "Incorporar Mapa".</p>
                <img class="tutorial-imagen" src="../img/c.png" />
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-header">
                <span><b>4</b></span>
            </div>
            <div class="card-body">
                <p>Hacer click donde dice "Copiar HTML".</p>
                <img class="tutorial-imagen" src="../img/d.png" />
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-header">
                <span><b>5</b></span>
            </div>
            <div class="card-body">
                <p>Pegar el contenido que copiamos en un notepad, bloc de notas, word, etc y
                    copiar nuevamente pero solo el contenido que se encuentra entre comillas ("")
                    luego de donde dice src.
                </p>
                <img class="tutorial-imagen" src="../img/e.png" />
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-header">
                <span><b>6</b></span>
            </div>
            <div class="card-body">
                <p>Pegar la url y todo lo que copiamos dentro del campo Ubicación</p>
                <img class="tutorial-imagen" src="../img/f.png" />
            </div>
        </div>
        <div class="mt-1">
            <a class="btn btn-dark" href="./agregar_restaurante.php"> Volver </a>
        </div>
    </div>
</div>

</div>
<?php
require("./base/footer.php");
?>