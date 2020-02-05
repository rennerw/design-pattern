<?php
    require_once "Desconto5Itens.php";
    require_once "Desconto500Reais.php";
    require_once "Desconto300Reais.php";
    require_once "SemDesconto.php";

    class CalculadoraDeDescontos {
        public function calcula(Orcamento $orcamento){
            /*
            if(count($orcamento->getItens()) >= 5) return $orcamento->getValor() * 0.1;
            else if($orcamento->getValor() > 500) return $orcamento->getValor() * 0.05;
            return 0;
            */
            $desconto5itens = new Desconto5Itens(); // 1
            $desconto500reais = new Desconto500Reais(); // 2
            $desconto300reais = new Desconto300Reais(); // 3
            $semDesconto = new SemDesconto(); 
            
            $desconto5itens->setProximo($desconto500reais);
            $desconto500reais->setProximo($desconto300reais);
            $desconto300reais->setProximo($semDesconto);
            
            return $desconto5itens->calcula($orcamento);
            
        }
    }
?>