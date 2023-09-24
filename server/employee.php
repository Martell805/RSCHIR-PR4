<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $mysqli = new mysqli("db", "user", "password", "appDB");
    $result = $mysqli->query("SELECT * FROM employees");

    echo "<table>";
    foreach ($result as $row){
        echo "
        <tr>
            <td>{$row['ID']}</td>
            <td>{$row['name']}</td>
            <td>{$row['surname']}</td>
            <td>{$row['salary']}</td>
        </tr>
        ";
    }
    echo "</table>";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $entityBody = json_decode(file_get_contents('php://input'), true);

   $name = $entityBody["name"];
   $surname = $entityBody["surname"];
   $phone = $entityBody["salary"];

   $mysqli = new mysqli("db", "user", "password", "appDB");
   $query = "INSERT INTO employees (name, surname, salary) VALUES ('{$name}', '{$surname}', {$salary})";
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
   $phone = $entityBody["salary"];

   $mysqli = new mysqli("db", "user", "password", "appDB");
   $query = "UPDATE employees SET name='{$name}', surname='{$surname}', salary='{$salary}' WHERE id={$id}";
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
   $query = "DELETE FROM employees WHERE id={$id}";
   $result = $mysqli->query($query);
   echo $query . "\n";

   if ($result) {
       echo "Успех";
   } else {
       echo "Ошибка: " . $mysqli->error;
   }
}

?>

