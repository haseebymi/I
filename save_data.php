<?php
// اتصال بقاعدة البيانات
$servername = "sql300.infinityfree.com";
$username = "if0_36604452";
$password = "Hw815960211";
$dbname = "if0_36604452_sys";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: text/html; charset=utf-8');
mysqli_set_charset($conn, 'utf8');

// استلام البيانات من النموذج
$name = $_POST['name'];
$namper = $_POST['namper'];
$data = $_POST['data'];

// إدراج البيانات في جدول 'as'

$sql = "INSERT INTO `as` (`Name`, `Namper`, `Data`) VALUES ('$name', '$namper', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "تم حفظ البيانات في MySQL بنجاح!";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>