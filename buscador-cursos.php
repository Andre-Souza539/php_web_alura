<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base-uri' => 'https://www.alura.com.br/']);
$urlCursos = '/cursos-online-programacao';
$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar($urlCursos);


foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}