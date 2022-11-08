<?php  
$servername = "localhost";
$database = "veliki";
$username = "dio";
$password = "da";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//$headers = explode(';', $headers);




//Подключаемся к бзе с логином и паролем, принудительно задаем кодировку операций.

while ($headers=file_get_contents("a.txt")==null){
	$a = explode(';', $headers);
	print_r($a);
	mysqli_query($conn, "INSERT INTO velosipedis (marka,type,age,date,speed_count,color,weight,price,updated_at,created_at) VALUES ($a[0],$a[1],$a[2],$a[3],$a[4],$a[5],$a[6],$a[7],'22-10-24','22-10-24')"); 
}

mysqli_close($conn);
?>
