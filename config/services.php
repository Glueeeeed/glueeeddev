<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'websiteData' => [
        'text1' => 'Glueeed',
        'text2' => 'Backend Developer | Entuzjasta Kryptografii',
        'text3' => 'O mnie',
        'text4' => 'Cześć, nazywam sie Kuba. Mam 17 lat. Interesuje sie technologiami backendowymi oraz kryptografią. Mam obsesje na punkcie bezpieczeństwa, jara mnie projektowanie bezpiecznych systemow. Aktualnie projektuje swoj Jezyk programowania :D',
        'text5' => 'Projekty',
        'box1_Text1' => 'GlueCrypt',
        'box1_Text2' => 'Narzędzie umożliwiające bezpieczne szyfrowanie tesktu oraz plików przy użyciu  algorytmów kryptograficznych.',
        'box1_Text3' => 'TypeScript',
        'box1_Text4' => 'Express.js',
        'box1_Text5' => 'TailwindCSS',
        'box2_Text1' => 'GlueCrypt_Auth',
        'box2_Text2' => 'System uwietrzytelniania oparty na podpisach kryptograficznych inspirowany',
        'box2_Text3' => 'Dowodami Zerowej Wiedzy',
        'box2_Text4' => 'TypeScript',
        'box2_Text5' => 'JavaScript',
        'box2_Text6' => 'Express.js',
        'box2_Text7' => 'TailwindCSS',
        'box3_Text1' => 'GlueScript',
        'box3_Text2' => 'Prototyp języka kompilowanego, posiada własny kompilator oraz własną składnię. Skupiony by zapewnić elastyczność i wydajność.',
        'box3_Text3' => 'C++',
        'box3_Text4' => 'LLVM',
        'box4_Text1' => 'GlueNews',
        'box4_Text2' => 'Narzędzie umożliwiające analize i weryfikacje informacji pod kątem dezinformacji oraz fake newsów.',
        'box4_Text3' => 'TypeScript',
        'box4_Text4' => 'Express.js',
        'box4_Text5' => 'TailwindCSS',
        'box4_Text6' => 'Socket.io',
    ]

];
