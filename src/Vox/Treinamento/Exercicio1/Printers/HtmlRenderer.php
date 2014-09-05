<?php

namespace Vox\Treinamento\Exercicio1\Printers;

use Vox\Treinamento\Exercicio1\Interfaces\RendererInterface;
use Vox\Treinamento\Exercicio1\Pedido;

class HtmlRenderer implements RendererInterface
{

    public function render(Pedido $pedido)
    {
        echo '===========================================<br>';
        $valorDosItens = 0;
        $htmlItem = '';
        foreach($pedido->getItens() as $item) {
            $htmlItem .= $this->montaHtml($item->build());
            $valorDosItens += $item->getValorTotal();
        }
        echo $htmlItem;
        echo '===========================================<br>';
        echo 'Valor Total: R$ ' . $valorDosItens;
    }

    private function montaHtml(\Easy\Collections\Dictionary $itens)
    {
        $htmlItem = '';
        foreach($itens as $item) {
            $htmlItem .= 'Produto: ' . $item->get('produto');
            $htmlItem .= ' => Valor: ' . $item->get('valor');
            $htmlItem .= '<br>';
        }
        return $htmlItem;
    }
}