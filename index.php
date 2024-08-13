<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'learn_pdo';

try {

    // Set DSN (Data source name)
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    // echo "Connected\n";
} catch (Exception $e) {
  die("Unable to connect: " . $e->getMessage());
}


// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

//Optional option
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


# PDO QUERY

// $stmt = $pdo->query('SELECT * FROM posts');

// while ($row = $stmt->fetch()){
 
//     echo $row->title . '<br/>';
// }

# PREPARED Statement (Prepare & excute)

// UNSAFE
// $sql = "SELECT * FROM posts WHERE author = '$author'"

// FETCH MULTIPLE POSTS
 $author = "Admin";

# Positinal Params
//  $sql = 'SELECT * FROM posts WHERE author = ?';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute([$author]);
//  $posts = $stmt->fetchAll();

# Named Params
    // $sql = 'SELECT * FROM posts WHERE author = :author';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author' => $author]);
    // $posts = $stmt->fetchAll();

# FETCH SINGLE POST
    // $sql = 'SELECT * FROM posts WHERE id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id' => 1]);
    // $posts = $stmt->fetch();

    echo "<pre>";
var_dump($posts); 
//  foreach($posts as $post){
//     echo $post->title . '<br/>' ;
//  }