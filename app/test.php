<?php
include('models/accountable.php');
$accountable = new Accountable(1, 'Jean', 'Doe', '+32479278181', 'jeandoe@doe.com');
echo json_encode($accountable);
echo $accountable->__get('name');
?>
