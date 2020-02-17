<?php
    
    class ICCC extends TemplateImpostoCondicional{
        function __construct($imposto = null){
            parent::__construct($imposto);
        }

        // ele foi sobrescisto
        public function calcula(Orcamento $orcamento){
            $valor = $orcamento->getValor();
            if($valor < 1000)
                return $valor * 0.05 + $this->calculaOutroImposto($orcamento);
            elseif($valor >= 1000 && $valor < 3000)
                return ($valor * 0.07) + $this->calculaOutroImposto($orcamento);
            else
                return ($valor * 0.08 + 30) + $this->calculaOutroImposto($orcamento);
        }
        
        public function deveUsarMaximo(Orcamento $orcamento){
            return $orcamento->getValor() > 3000;
        }
    
        public function taxaMaxima(Orcamento $orcamento){
            return ($orcamento->getValor() * 0.08) + 30;
        }
        public function taxaMinima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.05;
        }
    }
?>