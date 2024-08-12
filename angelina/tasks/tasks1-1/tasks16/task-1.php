<?php
    $mysqli = new mysqli("localhost","root","","test");
    // Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>
<?php
    // $sql = `SELECT 
    //     goods.categoryid
    // FROM 
    //     goods 
    //  JOIN categories 
    // ON categories.category_id=goods.categoryid`;

    $sql = "SELECT goods.name FROM goods JOIN categories ON categories.category_id = goods.categoryid";

    // $sql = "SELECT categoryid FROM goods";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) { 
        echo $row["name"]; 
        } 
        } else { 
        echo "0 результат"; 
        }
?>