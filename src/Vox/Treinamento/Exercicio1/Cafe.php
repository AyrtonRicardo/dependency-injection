<?php

namespace Vox\Treinamento\Exercicio1;

use Easy\Collections\ArrayList;
use Easy\Collections\Dictionary;
use Vox\Treinamento\Exercicio1\Interfaces\SummableInterface;

class Cafe implements SummableInterface
{

    /**
     *
     * @var float
     */
    private $valor;

    /**
     *
     * @var ArrayList
     */
    private $adicionais;

    public function __construct()
    {
        $this->valor = 10;
        $this->adicionais = new ArrayList();
    }

    public function build()
    {
        $valorTotal = new Dictionary();
        foreach($this->adicionais as $chave => $adicional) {
            $valorTotal->set($chave, $adicional->build());
        }

        return $valorTotal;
    }

    /**
     * @param AbstractAdicional $adicional
     * @return Cafe
     */
    public function addAdicional(AbstractAdicional $adicional)
    {
        $this->adicionais->add($adicional);
        return $this;
    }

    public function getValorTotal()
    {
        $valorTotal = 0;
        foreach($this->adicionais as $adicional) {
            $valorTotal += $adicional->getValorTotal();
        }

        return $valorTotal;
    }
}