<?php
/**
 * Classe responsável por disponibilizar template de metodos para Impostos com condicionais
 */
    abstract class TemplateImpostoCondicional extends Imposto{
        function __construct($imposto = null){
            parent::__construct($imposto);
        }

        public function calcula(Orcamento $orcamento){
            if($this->deveUsarMaximo($orcamento)){
                return $this->taxaMaxima($orcamento) + $this->calculaOutroImposto($orcamento);
            }
            else{
                return $this->taxaMinima($orcamento) + $this->calculaOutroImposto($orcamento);
            }
        }

        public abstract function deveUsarMaximo(Orcamento $orcamento);
        public abstract function taxaMaxima(Orcamento $orcamento);
        public abstract function taxaMinima(Orcamento $orcamento);

    }

?>