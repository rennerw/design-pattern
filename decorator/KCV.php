<?php
    
    class KCV extends TemplateImpostoCondicional{
        function __construct($imposto = null){
            parent::__construct($imposto);
        }
        
        public function deveUsarMaximo(Orcamento $orcamento){
            $item = false;
            $item = array_map(function($item){
                if($item->getValor() > 100) return true;
            }, $orcamento->getItens() );

            return $orcamento->getValor() > 500 && $item == true;
        }
    
        public function taxaMaxima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.2;
        }
        public function taxaMinima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.05;
        }    
    }
?>