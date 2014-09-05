<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Vox\Treinamento\Exercicio1\Exercicio1Extension;

require 'vendor/autoload.php';

Debug::enable();

$container = new ContainerBuilder();
$extension = new Exercicio1Extension();
$container->registerExtension($extension);
$container->loadFromExtension($extension->getAlias());
//$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Resources/config'));
//$loader->load('services.yml');
//Compila sabagaça
$container->compile();

$cafe = $container->get('cafe');
$chantily = $container->get('chantily');
$pedido = $container->get('pedido');
$expresso = $container->get('expresso');
$duplo = $container->get('duplo');

$cafe->addAdicional($chantily);
$cafe->addAdicional($expresso);
$cafe->addAdicional($duplo);

$pedido->addCafe($cafe);
//$pedido->build();


$factoryPrinter = $container->get('factory_cupom_fiscal');
$renderer = $factoryPrinter->getCupomFiscal('json');
$renderer->render($pedido);