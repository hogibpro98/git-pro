<?php
function formatCurrency($amount) {
    return '$' . number_format($amount, 2);
}

function checkPermission($role) {
    return $role === 'admin';
}
