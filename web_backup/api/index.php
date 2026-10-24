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

// 2. Locate and copy SQLite database to writable /tmp
$candidates = [
    __DIR__ . '/../database/database.sqlite',
    __DIR__ . '/../web/database/database.sqlite',
    __DIR__ . '/database/database.sqlite',
    dirname(__DIR__) . '/database/database.sqlite',
    dirname(__DIR__) . '/web/database/database.sqlite',
    '/var/task/database/database.sqlite',
    '/var/task/web/database/database.sqlite',
    '/var/task/user/database/database.sqlite',
    '/var/task/user/web/database/database.sqlite',
];
$found = null;
foreach ($candidates as $c) {
    if (file_exists($c) && filesize($c) > 0) {
        $found = $c;
        break;
    }
}

$tmpDb = '/tmp/database.sqlite';
if (!file_exists($tmpDb) || filesize($tmpDb) === 0) {
    if ($found) {
        copy($found, $tmpDb);
    } else {
        touch($tmpDb);
    }
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
if (file_exists(__DIR__ . '/../public/index.php')) {
    require __DIR__ . '/../public/index.php';
} elseif (file_exists(__DIR__ . '/../web/public/index.php')) {
    require __DIR__ . '/../web/public/index.php';
} else {
    require '/var/task/public/index.php';
}
