<html>

<head>
    <title>PHP Get Results</title>
</head>

<body>

    <?php

        // Show all URL parameters (and all form data submitted via the 'get' method)
        //foreach($_GET as $key=>$value){
        //    echo $key, ' => ', $value, "<br/>n";
        //}

        // Show a particular value.
        $name = $_GET['name'];
        $image = $_GET['image'];
        $description = $_GET['description'];
    
        $today = getdate();
        $date = $today['month'] . $today['mday'] . ',' . $today['year'];
        //echo 'Date: ' . $date .'<br>';
        
        
        
        if($name) {
            echo 'name: ', $name, "<br>";
        }
        else {
            echo 'No name.<br>';
        }

        if($image) {
            echo 'date: ', $image, "<br>";
        }
        else {
            echo 'No image.<br>';
        }

        if($description) {
            echo 'description: ', $description, "<br>";
        }
        else {
            echo 'No description.<br>';
        }

        $db = new SQLite3('../db/projects.db');
    
        $st = 'Hello';
    
        $st = 'INSERT INTO project (Name, Date, Description, Photo) VALUES ("'.$name.'","'.$date.'","'.$description.'","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsomkQbm3gLinND6z4ghxBMXgO1B6XgxHk8BnrvddgptvQquf0YQ")';
        //echo 'String: ' . $st;

        $db->exec('INSERT INTO project (Name, Date, Description, Photo) VALUES ("'.$name.'","'.$date.'","'.$description.'","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsomkQbm3gLinND6z4ghxBMXgO1B6XgxHk8BnrvddgptvQquf0YQ")');
        echo "Row inserted \n";

    ?>

</body>

</html>
