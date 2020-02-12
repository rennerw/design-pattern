<?php
    
class ICMS extends TemplateImpostoCondicional{
    
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