<?php
/**
 * Classe responsável por disponibilizar template de metodos para Impostos com condicionais
 */
    abstract class TemplateImpostoCondicional implements Imposto{

        public function calcula(Orcamento $orcamento){
            if($this->deveUsarMaximo($orcamento)){
                return $this->taxaMaxima($orcamento);
            }
            else{
                return $this->taxaMinima($orcamento);
            }
        }

        public abstract function deveUsarMaximo(Orcamento $orcamento);
        public abstract function taxaMaxima(Orcamento $orcamento);
        public abstract function taxaMinima(Orcamento $orcamento);

    }

?>