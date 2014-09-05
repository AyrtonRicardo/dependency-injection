<?php

namespace Vox\Treinamento\Exercicio1;

use Easy\Collections\ArrayList;
use Vox\Treinamento\Exercicio1\Interfaces\CompositeInterface;
use Vox\Treinamento\Exercicio1\Interfaces\CupomFiscalInterface;
use Vox\Treinamento\Exercicio1\Interfaces\SummableInterface;

class Pedido implements CompositeInterface, SummableInterface
{

    /**
     *
     * @var ArrayList
     */
    private $itens;

    /**
     *
     * @var float
     */
    private $valorTotal;

    /**
     *
     * @var CupomFiscalInterface
     */
    private $cupomFiscal;

    public function __construct()
    {
        $this->itens = new ArrayList();
    }

    public function addCafe(Cafe $cafe)
    {
        $this->itens->add($cafe);
        return $this;
    }

    public function removeCafe(Cafe $cafe)
    {
        $this->itens->removeValue($cafe);
        return $this;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function build()
    {
//        echo '===========================================<br>';
//        $valorDosItens = 0;
//        foreach($this->itens as $item) {
//            $item->build();
//            $valorDosItens += $item->getValorTotal();
//        }
//
//        echo '===========================================<br>';
//        echo 'Valor Total: R$ ' . $valorDosItens;
    }

    /**
     * 
     * @return ArrayList
     */
    public function getItens()
    {
        return $this->itens;
    }
}