<?php
include 'db_connect.php';

// Fetch Record from Database

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CampIMCApps' . '_' . date('m/d/Y H:i:s', time()) .'.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('', 'Team Name','School','Contact Number', 'Email', 'No. of Members', 'Member 1', 'Member 2', 'Member 3', 'Member 4', 'Member 5'));

// fetch the data

$rows = $dbConnection->query('SELECT * FROM applications');

// loop over the rows, outputting them
while ($row = $rows->fetch(PDO::FETCH_ASSOC)) fputcsv($output, $row);


?>
