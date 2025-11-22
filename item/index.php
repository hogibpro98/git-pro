<?php
require_once 'order.php';

echo "<h1>Total " . formatCurrency(100) . "</h1>";
echo "<p>Current Version: " . APP_VERSION . "</p>";
echo "<p>Sum: " . sum(10, 20) . "</p>";

// Additional code can be added here if needed
echo "<p>Thank you for using our service!</p>";
echo "<p>Contact us for more information.</p>";
echo "<p>Have a great day!</p>";