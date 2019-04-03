[doc]: http://sandox-sp-api/?php#

![MIT License](https://img.shields.io/badge/license-MIT-007EC7.svg?style=flat-square)
![Current Version](https://img.shields.io/badge/version-1.0-green.svg)

## Requirements

`PHP >= 5.4`

## Installation

``` bash
composer require antonio1718/sp-api-php
```
If you encounter an issue, please post it here and not on the mirror repository.

````php
<?php
require 'vendor/autoload.php';
use \Spapi\ServiceSp;

$apiKey = 'your_api_key';

$spapi = new \Spapi\SpClient($apiKey);

$data = [
	'type_enveloppe' => 'c6',
	'enveloppe' 	 => 'fenetre',
	'fichier_modele' => [
					'nom' => 'modele.docx',
					'fichier' => 'vfgklzxxctyuelp...'
					],
	'fichier_donnees' => [
					'nom' => 'donnee.csv',
					'fichier' => 'vfgklzxxctyuelp...'
	],

	'type_affranchissement' => 'lrar',
	'couleur' => 'nb',
	'recto_verso' => 'recto',
	'placement_adresse' => 'premiere_page',
	'surimpression_expediteur_document' => true,
	"impression_expediteur_enveloppe" => true,
    	"code_barre" => true,
];

$response = $spapi->send(ServiceSp::PUBLIPOSTAGE, $data);

print_r($response);
````
