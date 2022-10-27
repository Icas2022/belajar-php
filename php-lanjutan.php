<?php

$nama = "Icas";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

/*
$no = 10;

for($i=0; $i<$no; $i++) {
$n = $i + 1;
echo $n." ".$nama."<br/>";
$i++;
}
*/

/*
$no = 100;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Avanza', 'Hyundai', 'Tesla', 'VolkSwagen', 'Xpander') ;

foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN JIKA MAKA
/*
if ($nama == "Icas") {
    echo $nama." adalah orang Purbalingga";
} else {
    echo $nama." bukan orang Purbalingga";
}
*/
/*
switch ($nama) {
    case "Icas";
        $pesan = $nama." adalah orang Purbalingga";
    break;
    case "Icas";
    $pesan = $nama." bukan orang Purbalingga";
break;
default:
$pesan = $nama." berasal dari mana ya?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Icas":
                    $pesan = $_POST['nama']." adalah orang Purbalingga";
                break;
                case "Velaninda":
                    $pesan = $_POST['nama']." berasal dari pulau Jawa";
                break;
                default:
                    $pesan = $_POST['nama']." berasal dari mana ya?";
            
                }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>

