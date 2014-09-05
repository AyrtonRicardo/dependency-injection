<?php

namespace Vox\Treinamento\Exercicio1;

use Vox\Treinamento\Exercicio1\Interfaces\CompositeInterface;
use Vox\Treinamento\Exercicio1\Interfaces\SummableInterface;

Abstract class AbstractAdicional implements SummableInterface, CompositeInterface
{

    /**
     *
     * @var String
     */
    protected $nome;

    /**
     *
     * @var float
     */
    protected $valor;

}