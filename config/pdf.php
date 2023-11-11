<?php

return [
	'font_path' => base_path('resources/fonts/'),
	'font_data' => [
    'iec' => [
        'R'  => 'STC-Bold.ttf',    // regular font
        'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
        'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
    ]
],
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir' => base_path('storage/app/mpdf'),
	'pdf_a'                 => true,
	'pdf_a_auto'            => true,
	'icc_profile_path'      => '',
	
	];
