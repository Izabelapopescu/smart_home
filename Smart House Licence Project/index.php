<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
    <div>
        <?php

            include 'database_connection.php';
            $conn = OpenCon();
            echo '<table>
            <thead>
            <tr>
            <th> ID</td>
            <th>Name</th>
            </tr>
            </thead>';
            $result = mysqli_query($conn, "SELECT * FROM users");

            while($row = mysqli_fetch_array($result))
            {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
            echo "<tbody>";
            }
            echo "</table>";
            
            CloseCon($conn);           
        ?>
    </div>
</body>
</html>