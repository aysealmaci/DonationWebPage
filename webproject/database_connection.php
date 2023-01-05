<?php
// Veritabanı sunucusu, kullanıcı adı, parola ve veritabanı adını tanımlayın
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'register');

// Veritabanına bağlanın ve bağlantının başarılı olup olmadığını kontrol edin
$database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>