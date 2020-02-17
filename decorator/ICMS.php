<?php
    
class ICMS extends TemplateImpostoCondicional{
    
    function __construct($imposto = null){
        parent::__construct($imposto);
    }

    public function deveUsarMaximo(Orcamento $orcamento){
        return $orcamento->getValor() > 500;
    }

    public function taxaMaxima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.15;
    }
    public function taxaMinima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.05;
    }
}
?>