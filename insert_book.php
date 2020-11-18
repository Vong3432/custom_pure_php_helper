<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php    

    require_once('helper/QueryHelper.php');

    // TODO 1: Create short variable names.
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $price = $_POST['price'];       

    // TODO 2: Check and filter data coming from the user.    
    if(validateDataIsNotNull($isbn, $author, $title, $price) == false)
        dieConnect("All fields must not be empty");

    $helper = new QueryHelper();

    $helper->add([ "isbn" => $isbn, "author" => $author, "title" => $title, "price" => $price], 'catalogs');               

    ?>
</body>
</html>