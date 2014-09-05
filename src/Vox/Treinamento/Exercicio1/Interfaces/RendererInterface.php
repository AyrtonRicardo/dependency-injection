<?php

namespace Vox\Treinamento\Exercicio1\Interfaces;

use Vox\Treinamento\Exercicio1\Pedido;

interface RendererInterface
{

    public function render(Pedido $pedido);
}