<?php
    function autoload($class) {
        include $class.".php";
    }

    spl_autoload_register("autoload");

    $reforma = new Orcamento(305);
    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br>";

    echo $calculadora->calcula($reforma, new ISS());

    echo "<br>";

    echo $calculadora->calcula($reforma, new KCV());

    echo "<br>";
    
    echo $calculadora->calcula(new Orcamento(3500), new ICCC());
    echo "<br>";
    echo "Teste de Descontos";
    echo "<br>";
    $calculadoraDeDescontos = new CalculadoraDeDescontos();
    echo "Desconto: ";

        $reforma->addItem(new Item("Tijolo",250));
        $reforma->addItem(new Item("Cimento 1kg",250));
        $reforma->addItem(new Item("Cimento 1kg",250));
        $reforma->addItem(new Item("Cimento 1kg",250));
    
    echo $calculadoraDeDescontos->calcula($reforma);

?>