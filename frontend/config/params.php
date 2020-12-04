<?php
return [
    'bsDependencyEnabled' => false, // this will not load Bootstrap CSS and JS for all Krajee extensions 
    // you need to ensure you load the Bootstrap CSS/JS manually in your view layout before Krajee CSS/JS assets
    //
    // other params settings below
    // 'bsVersion' => '4.x', 
    // 'adminEmail' => 'admin@example.com'
    'adminEmail' => 'admin@example.com',
    'hail812/yii2-adminlte3' => [
        'pluginMap' => [
            'sweetalert2' => [
                'css' => 'sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
                'js' => 'sweetalert2/sweetalert2.min.js'
            ],
            'toastr' => [
                'css' => ['toastr/toastr.min.css'],
                'js' => ['toastr/toastr.min.js']
            ],
        ]
    ]
];
