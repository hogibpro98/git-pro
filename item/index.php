<?php
require_once 'order.php';

echo "<h1>Total " . formatCurrency(100) . "</h1>";
echo "<p>Current Version: " . APP_VERSION . "</p>";
echo "<p>Sum: " . sum(10, 20) . "</p>";