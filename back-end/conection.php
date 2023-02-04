
<?

header('Access-Control-Allow-Origin: http://localhost:5173');
    header('Access-Control-Allow-Credentials: true');


$dsn = 'mysql:dbname=web1_avaliacao;host=localhost;port=3306';
    $conn = new PDO($dsn, 'root', 'root');

    session_start();

?>