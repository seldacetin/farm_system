<?php

class sqlbaglanti{

    var $sunucu="localhost";
    var $username="root";
    var $password="";
    var $dbname="ciftlik_sistemleri";
    var $baglanti;

    function __construct(){
        try{
        $this->baglanti=new PDO("mysql:host=".$this->sunucu.";dbname=".$this->dbname.";charset=utf8",$this->username,$this->password);
        }catch (PDOException $error){
            echo $error->getMessage();
            exit();
        }
    }

    public function VeriGetir($tablo, $wherealanlar="", $wherearraydeger="", $ordeby="ORDER BY ID ASC", $limit="" ){
        $this->baglanti->query("SET CHARACTER SET ut8");
        $sql="SELECT * FROM".$tablo;
        if (!empty($wherealanlar))
    }

}
?>


<?php
/*
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
*/
?>
