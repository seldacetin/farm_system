<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('location: index.php');
}

$userId = $_SESSION['id'];
$user = [];

$db = null;
try {
    $db = new PDO("mysql:host=localhost;dbname=ciftlik_sistemleri", "root" , "");
} catch (PDOException $e ){
    print $e->getMessage();
}

$query = $db->prepare("SELECT * FROM uyeler WHERE id = :id");
$query->execute([
    ':id' => $userId
]);

$data = $query->fetchAll(\PDO::FETCH_ASSOC);

foreach ($data as $val) {
    foreach ($val as $item => $itemVal) {
        $user[$item] = $itemVal;
    }
}
?>