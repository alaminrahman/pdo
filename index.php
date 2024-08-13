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
    // $sql = 'SELECT * FROM posts';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $posts = $stmt->fetchAll();

    // echo "<pre>";
    // var_dump($posts);

# FETCH SINGLE POST
    // $sql = 'SELECT * FROM posts WHERE id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id' => 1]);
    // $posts = $stmt->fetch();

# GET ROW COUNT
    // $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
    // $stmt->execute([$author]);
    // $postCount = $stmt->rowCount();

    // echo $postCount;

# INSERT DATA
// $title = 'Post six';
// $body = 'This is post five';
// $author = 'Kevin';

// try {

//     $sql = 'INSERT INTO posts(title, body, author) VALUES (:title, :body, :author)';
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
//     echo 'Post Added';

// } catch (Exception $e) {
//     die("Post not added: " . $e->getMessage());
// }

# UPDATE DATA
// $id = 1;
// $title = 'Post Update';
// $body = 'Updated This is post five';

// try {

//     $sql = 'UPDATE posts SET body = :body WHERE id = :id';
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute(['id' => $id, 'body' => $body]);
//     echo 'Post Updated';

// } catch (Exception $e) {
//     die("Post not Updated: " . $e->getMessage());
// }

# DELETE DATA
// $id = 5;

// try {

//     $sql = 'DELETE FROM posts WHERE id = :id';
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute(['id' => $id]);
//     echo 'Post Deleted';

// } catch (Exception $e) {
//     die("Post not Deleted: " . $e->getMessage());
// }
