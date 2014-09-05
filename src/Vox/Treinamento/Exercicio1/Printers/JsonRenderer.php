<?php

namespace Vox\Treinamento\Exercicio1\Printers;

use Easy\Collections\ArrayList;
use Easy\Collections\Dictionary;
use Vox\Treinamento\Exercicio1\Interfaces\RendererInterface;
use Vox\Treinamento\Exercicio1\Pedido;

class JsonRenderer implements RendererInterface
{

    public function render(Pedido $pedido)
    {
        $dadosToJson = new ArrayList();
        $valorDosItens = 0;
        foreach($pedido->getItens() as $item) {
            foreach($item->build() as $dadosCafe) {
                $dadosToJson->add($dadosCafe->toArray());
            }
            $valorDosItens += $item->getValorTotal();
        }
        $dadosToJson->add(array(
            'valor_max' => $valorDosItens
        ));
        echo json_encode($dadosToJson->toArray());
    }

    private function montaHtml(Dictionary $itens)
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