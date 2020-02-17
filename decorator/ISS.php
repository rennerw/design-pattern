<?php
    
    class ISS extends TemplateImpostoCondicional{
        function __construct($imposto = null){
            parent::__construct($imposto);
        }
        
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