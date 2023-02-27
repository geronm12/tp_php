<?php
require("./base/header.php");
require("./navbar.php");
?>
<div class="d-flex justify-content-center">
    <div class="box text-center">
        <h5>Instrucciones para obtener la ubicación</h5>
        <div>
            <span><b>1</b></span>
            <p>Ir hasta google y buscar la dirección que deseamos obtener, acto seguido haremos click donde dice "Maps".</p>
            <img class="tutorial-imagen" src="../img/a.png" />
        </div>
        <hr />
        <div>
            <span>2</span>
            <p>Una vez que estemos en la pestaña de maps debemos hacer click en donde dice "Compartir".</p>
            <img class="tutorial-imagen" src="../img/b.png" />
        </div>
        <hr />
        <div>
            <span>3</span>
            <p>Desde la pantalla de compartir deberemos hacer click donde dice "Incorporar Mapa".</p>
            <img class="tutorial-imagen" src="../img/c.png" />
        </div>
        <hr />
        <div>
            <span>4</span>
            <p>Hacer click donde dice "Copiar HTML".</p>
            <img class="tutorial-imagen" src="../img/d.png" />
        </div>
        <hr />
        <div>
            <span>5</span>
            <p>Pegar el contenido que copiamos en un notepad, bloc de notas, word, etc y
                copiar nuevamente pero solo el contenido que se encuentra entre comillas ("")
                luego de donde dice src.
            </p>
            <img class="tutorial-imagen" src="../img/e.png" />
        </div>
        <hr />
        <div>
            <span>6</span>
            <p>Pegar la url y todo lo que copiamos dentro del campo Ubicación</p>
            <img class="tutorial-imagen" src="../img/f.png" />
        </div>
        <a class="btn btn-dark" href="./agregar_restaurante.php"> Volver </a>
    </div>
</div>
<?php
require("./base/footer.php");
?>