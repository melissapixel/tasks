<?php
    // Подключение к MySQL
    $servername = "MySQL-8.2";
    $username = "root";
    $password = "";
    $dbname = "join";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->connect_error;

    $sql = "SELECT second.two FROM second JOIN first ON second.one = first.one";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["two"];
        }
    } else {
    echo "0 результат";
    }

    // Закрыть подключение
    $conn->close();
?>