<?php
    function autoload($class) {
        include $class.".php";
    }

    spl_autoload_register("autoload");

    $reforma = new Orcamento(500);
    $calculadora = new CalculadoraDeImpostos();
    $reforma->addItem(new Item("Tijolo",250));
    $reforma->addItem(new Item("Cimento 1kg",250));
    $reforma->addItem(new Item("Cimento 1kg",250));
    $reforma->addItem(new Item("Cimento 1kg",250));
    
    echo "ICMS -> ".$calculadora->calcula($reforma, new ICMS());
    echo "<br>";

    echo "ISS -> ".$calculadora->calcula($reforma, new ISS());
    echo "<br>";

    echo "KCV -> ".$calculadora->calcula($reforma, new KCV());
    echo "<br>";

    echo "IHIT -> ".$calculadora->calcula($reforma, new IHIT());
    echo "<br>";

    echo "IHIT + ICCC -> ".$calculadora->calcula($reforma, new IHIT(new ICCC()));
    echo "<br>";
    
    echo "ICCC -> ".$calculadora->calcula(new Orcamento(3500), new ICCC());
    echo "<br>";

    echo "ICCC + ImpostoMuitoAlto -> ".$calculadora->calcula(new Orcamento(3500), new ICCC(new ImpostoMuitoAlto));
    echo "<br>";

    echo "<h2>Teste de Descontos</h2>";
    echo "<br>";
    $calculadoraDeDescontos = new CalculadoraDeDescontos();
    echo "Desconto: ";

        $reforma->addItem(new Item("Tijolo",250));
        $reforma->addItem(new Item("Cimento 1kg",250));
        $reforma->addItem(new Item("Cimento 1kg",250));
        $reforma->addItem(new Item("Cimento 1kg",250));
    
    echo $calculadoraDeDescontos->calcula($reforma);

?>