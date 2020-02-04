<?php
    function autoload($class) {
        include $class.".php";
    }

    spl_autoload_register("autoload");

    $reforma = new Orcamento(500);
    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br>";

    echo $calculadora->calcula($reforma, new ISS());

    echo "<br>";

    echo $calculadora->calcula($reforma, new KCV());

    echo "<br>";
    
    echo $calculadora->calcula(new Orcamento(3500), new ICCC());
?>