<?php
$conn= mysqli_connect("localhost", "root", "", "butterflyeffect")
                or die(mysqli_error($conn));
$sql = "INSERT INTO butterflyeffect.details(id,firstname, lastname, email,phone)
VALUES ('user002','John', 'Doe', 'john@example.com','987654210')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}?>