<?php

include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM ph_citymun WHERE citymunDesc LIKE '%$value%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align: center;"></td>
            <td><?= $row['citymunDesc'] ?></td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}

$conn->close();