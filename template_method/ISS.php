<?php
    
    class ISS extends TemplateImpostoCondicional{
        public function deveUsarMaximo(Orcamento $orcamento){
            return $orcamento->getValor() > 300;
        }
    
        public function taxaMaxima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.15;
        }
        public function taxaMinima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.1;
        }   
    }
?>