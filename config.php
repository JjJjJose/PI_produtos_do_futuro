<?php

$conn = new PDO('mysql:host=localhost;dbname=pi_banco', 'root', '');



/* 
try {
    $conn = new PDO('mysql:host=localhost;dbname=pi_banco', 'root', '');
    echo "conectado";
} catch (PDOException $e) {
    echo "erro".$e->getMessage();
}

*/ 
$GLOBALS['conn'] = $conn;
function pdo()
{
    return $GLOBALS['conn'];
}


function isAlredySaved($email)
{
    $stmt = pdo()->prepare("SELECT * FROM `login` WHERE email_log=:pemail");
    $stmt->bindValue(":pemail", $email);
    $stmt->execute();
    if ($stmt->rowCount()) {
        return true;
    } else {
        return false;
    }
}
?>