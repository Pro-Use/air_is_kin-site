<?php

require_once __DIR__ . '/../plugins/kirby3-dotenv/global.php';

loadenv([
    'dir' => realpath(__DIR__ . '/../../'),
    'file' => '.env',
]);

return [
  'debug' => true,
  'kql' => [
      'auth' => 'bearer'
    ],
    'headless' => [
    'token' => 'nH9666+9ibi,',
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
  ],
  'blocksResolver' => [
        // Define which fields of which blocks should be resolved
        'files' => [
            // Resolve the `image` field in the `intro` block as a file
            'audio' => ['soundfile']
        ],
    ]
];