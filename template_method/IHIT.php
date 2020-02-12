<?php
    /**
     * Imposto do exercicio 5 da aula 4
     */
    class IHIT extends TemplateImpostoCondicional{
        public function deveUsarMaximo(Orcamento $orcamento){
            /*$nomes = array();
            $mesmoNome = false;
            foreach($orcamento->getItens() as $item){
                $nomes[] = $item->getNome();
            }
            
            $mesmoNome = array_map(function($item){
                if($item >= 2) return true;
            },array_count_values($nomes));
            
            return $mesmoNome == true;*/
            $noOrcamento = Array();
            $mesmoNome = false;
            foreach($orcamento->getItens() as $item) {
                if(in_array($item->getNome(),$noOrcamento)){
                    $mesmoNome = true;
                    return true;
                } 
                else $noOrcamento[] = $item->getNome();
            }

            return $mesmoNome;
        }
    
        public function taxaMaxima(Orcamento $orcamento){
            return ($orcamento->getValor() * 0.13) + 100;
        }
        public function taxaMinima(Orcamento $orcamento){
            return ($orcamento->getValor() * 0.01) * count($orcamento->getItens());
        }    
    }
?>