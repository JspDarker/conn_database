<?php
require_once "conn_db.php";

$_POST = array('username' => 'u1', 'email' => '');
$fields = array('username', 'email');
$requiredFields =array('username', 'email');
$errorMessages = array(
    'username_required' => 'username is required.',
    'email_required' => 'email is required.',
);
$outputMessages = array();
foreach($fields as $filed) {
    foreach($requiredFields as $requiredField) {
        if ($requiredField == $filed) {
            if (empty($_POST[$filed])) {
                $outputMessages[$filed . '_required'] = $errorMessages[$filed . '_required'];
            }
        }
    }
}

print_r($outputMessages);