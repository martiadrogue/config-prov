<?php

return [
        'connection' => [
                "class" => "Com\\Martiadrogue\\Mpwarfwk\\Parser\\ConnectionParserFactory"
            ],
        'twig' => [
                'class' => "Com\\Martiadrogue\\Mpwarfwk\\Service\\Template\\TwigService"
            ],
        'pdo' => [
                'class' => "Com\\Martiadrogue\\Mpwarfwk\\Service\\Database\\PdoService",
                'arguments' => "connection"
            ]
    ];
