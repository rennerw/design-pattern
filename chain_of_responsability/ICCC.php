<?php
    
    class ICCC implements Imposto{
        public function calcula(Orcamento $orcamento){
            $valor = $orcamento->getValor();
            if($valor < 1000)
                return $valor * 0.05;
            elseif($valor >= 1000 && $valor < 3000)
                return $valor * 0.07;
            else
                return ($valor * 0.08) + 30;
        }      
    }
?>