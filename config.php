<?php
define('DB_HOST', 'localhost.dev');
define('DB_USER', 'root');
define('DB_PASS', 'secret');
define('APP_NAME', 'My Super App');
define('APP_VERSION', '1.0.0'); // Chúng ta sẽ nâng cấp cái này sau<?php
function formatCurrency($amount) {
    return '$' . number_format($amount, 2);
}

function checkPermission($role) {
    return $role === 'admin';
}
