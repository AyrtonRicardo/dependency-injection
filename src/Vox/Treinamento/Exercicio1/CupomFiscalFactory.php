<?php

namespace Vox\Treinamento\Exercicio1;

class CupomFiscalFactory
{

    public function getCupomFiscal($cupom = '')
    {
        $retorno = null;
        switch($cupom) {
            case 'html':
                $retorno = new Printers\HtmlRenderer();
                break;
            case 'json':
                $retorno = new Printers\JsonRenderer();
                break;
            default:
                $retorno = new Printers\HtmlRenderer();
        }

        return $retorno;
    }
}