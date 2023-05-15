<h1>Ensemble Management API Server ensembleapi 1</h1>
<?php
$host = 'localhost';
$user = 'root';
$pass = 'P@ssword1';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$apache_headers = apache_request_headers();

foreach ($apache_headers as $key => $value) {
    echo "$key => $value <br/>\n";
}
echo "<br />\n";
echo "<br />\n";
echo "Connected to MySQL successfully!";
?>
