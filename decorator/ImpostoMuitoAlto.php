<?php
    
class ImpostoMuitoAlto extends TemplateImpostoCondicional{
    
    function __construct($imposto = null){
        parent::__construct($imposto);
    }

    public function deveUsarMaximo(Orcamento $orcamento){
        return $orcamento->getValor() > 3000;
    }

    public function taxaMaxima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.20;
    }
    public function taxaMinima(Orcamento $orcamento){
        return $orcamento->getValor() * 0;
    }
}
?>