<?php

// 1. Prepare writable /tmp directories for Laravel on Vercel Serverless
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 2. Prepare SQLite in /tmp with read-write access
$dbSource = __DIR__ . '/../web/database/database.sqlite';
$tmpDb = '/tmp/database.sqlite';
if (file_exists($dbSource) && (!file_exists($tmpDb) || filesize($tmpDb) === 0)) {
    copy($dbSource, $tmpDb);
}

// 3. Set environment variables for serverless runtime
putenv('APP_ENV=production');
putenv('APP_DEBUG=true');
putenv('APP_KEY=base64:jUomzGjZ/yFqP917m1gC4rWcK9zGzVz6/m3+k9J1c0U=');
putenv('DB_CONNECTION=sqlite');
putenv("DB_DATABASE=$tmpDb");
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = 'true';
$_ENV['APP_KEY'] = 'base64:jUomzGjZ/yFqP917m1gC4rWcK9zGzVz6/m3+k9J1c0U=';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = $tmpDb;
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';

$_SERVER['DB_CONNECTION'] = 'sqlite';
$_SERVER['DB_DATABASE'] = $tmpDb;
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// 4. Forward request to Laravel public index
require __DIR__ . '/../web/public/index.php';
