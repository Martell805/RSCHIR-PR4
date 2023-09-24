<html lang="en">

<head>
<title>Таблица клиентов</title>
    <link rel="stylesheet" href="./style.css" type="text/css"/>
</head>
<body>
    <h1>Таблица клиентов</h1>
    <table>
        <tr><th>Id</th><th>Name</th><th>Surname</th><th>Phone</th></tr>
        <?php
            $mysqli = new mysqli("db", "user", "password", "appDB");
            $result = $mysqli->query("SELECT * FROM clients");

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
        ?>
    </table>

    <h1>Таблица сотрудников</h1>
    <table>
        <tr><th>Id</th><th>Name</th><th>Surname</th><th>Salary</th></tr>
        <?php
            $mysqli = new mysqli("db", "user", "password", "appDB");
            $result = $mysqli->query("SELECT * FROM employees");

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
        ?>
    </table>
</body>
</html>
