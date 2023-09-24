<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $mysqli = new mysqli("db", "user", "password", "appDB");
    $result = $mysqli->query("SELECT * FROM clients");

    echo "<table>";
    foreach ($result as $row){
        echo "
        <tr>
            <td>{$row['ID']}</td>
            <td>{$row['name']}</td>
            <td>{$row['surname']}</td>
            <td>{$row['phone']}</td>
        </tr>
        ";
    }
    echo "</table>";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $entityBody = json_decode(file_get_contents('php://input'), true);

   $name = $entityBody["name"];
   $surname = $entityBody["surname"];
   $phone = $entityBody["phone"];

   $mysqli = new mysqli("db", "user", "password", "appDB");
   $query = "INSERT INTO clients (name, surname, phone) VALUES ('{$name}', '{$surname}', '{$phone}')";
   $result = $mysqli->query($query);
   echo $query . "\n";

   if ($result) {
       echo "Успех";
   } else {
       echo "Ошибка: " . $mysqli->error;
   }

} else if ($_SERVER["REQUEST_METHOD"] == "PUT") {

   $entityBody = json_decode(file_get_contents('php://input'), true);

   $id = $entityBody["id"];
   $name = $entityBody["name"];
   $surname = $entityBody["surname"];
   $phone = $entityBody["phone"];

   $mysqli = new mysqli("db", "user", "password", "appDB");
   $query = "UPDATE clients SET name='{$name}', surname='{$surname}', phone='{$phone}' WHERE id={$id}";
   $result = $mysqli->query($query);
   echo $query . "\n";

   if ($result) {
       echo "Успех";
   } else {
       echo "Ошибка: " . $mysqli->error;
   }
} else if ($_SERVER["REQUEST_METHOD"] == "DELETE") {

   $entityBody = json_decode(file_get_contents('php://input'), true);

   $id = $entityBody["id"];

   $mysqli = new mysqli("db", "user", "password", "appDB");
   $query = "DELETE FROM clients WHERE id={$id}";
   $result = $mysqli->query($query);
   echo $query . "\n";

   if ($result) {
       echo "Успех";
   } else {
       echo "Ошибка: " . $mysqli->error;
   }
}

?>

