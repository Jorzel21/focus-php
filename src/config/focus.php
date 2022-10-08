<?php

return [

    /*
    |-------------------------------------------------------------
    | BASE URL
    |-------------------------------------------------------------
    | URL base, a partir da qual será montada a URL da requisição. 
    | Podendo ser os endpoints de homologação ou produção.
    */
    'base_url'  => env('FOCUS_BASE_URL'),
    'user'      => env('FOCUS_USER'),
    'pass'      => env('FOCUS_PASS'),
    'token'     => env('FOCUS_TOKEN'),
];
