<?php
return [
    'base_route'      => 'admin/filemanager',
    'middleware'      => ['web', 'auth'],
    'allow_format'    => 'jpeg,jpg,png,gif,webp,pdf,zip,rar,xls,xlsx,doc,docx,ppw,html,ppt,pptx',
    'max_size'        => 5000,
    'max_image_width' => 2048,
    'image_quality'   => 80,
];
