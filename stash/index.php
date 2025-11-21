<?php
require_once 'order.php';

echo "<h1>Total " . formatCurrency(19987) . "</h1>";
echo "<p>Current Version: " . APP_VERSION . "</p>";
echo "<p>Sum: " . sum(100, 200) . "</p>";