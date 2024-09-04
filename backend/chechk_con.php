<?php
$serverName = '10.200.100.24';
$connectionOptions = [
    "Database" => 'mobile_app',
    "Uid" => 'CRM',
    "PWD" => '2983523456Dare',
    "TrustServerCertificate" => true
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "Соединение установлено.\n";
} else {
    echo "Ошибка соединения.\n";
    die(print_r(sqlsrv_errors(), true));
}
