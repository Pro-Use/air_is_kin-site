<?php

require_once __DIR__ . '/../plugins/kirby3-dotenv/global.php';

loadenv([
    'dir' => realpath(__DIR__ . '/../../'),
    'file' => '.env',
]);

$secret = env('RECAPTCHA_SECRET');

return [
  'debug' => true,
  'api' => [
    'basicAuth' => true,
    // For local development, you may want to disable SSL verification
    'allowInsecure' => true
  ],
  'headless' => [
    // Default CORS configuration
    'cors' => [
        'allowOrigin' => '*',
        'allowMethods' => 'GET, POST, OPTIONS',
        'allowHeaders' => 'Accept, Content-Type, Authorization, X-Language',
        'maxAge' => '86400',
      ]
  ],
  'thumbs' => [
    'srcsets' => [
      'default' => [320, 640, 720, 800, 960, 1024],
      'large' => [320, 640, 800, 1024, 1600, 2048]
    ],
    'presets' => [
        'og' => [
          'width'   => 1200,
          'height'  => 630,
          'quality' => 80,
          'crop'    => true
        ],
        'twitter' => [
          'width'   => 1200,
          'height'  => 675,
          'quality' => 80,
          'crop'    => true
        ]
    ]
    ],
    'netlify-deploy'=> [
      'hook' => env('NETLIFY_HOOK'),
      'id' => env('NETLIFY_ID')
    ],
];