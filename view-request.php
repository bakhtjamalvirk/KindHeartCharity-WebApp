<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request - Kind Heart Charity</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<?php

include("header.php");
include("../connection.php");

if (isset($_POST['btnDelete'])) {
    $categoryId = $_POST['categoryId'];

    // Perform the delete operation
    $query = "DELETE FROM volunteer WHERE Id = ?";
    
    // Prepare the statement
    $stmt = $con->prepare($query);
    
    // Bind the parameter
    $stmt->bind_param("i", $categoryId);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo '<script type="text/javascript">';
        echo 'alert("Volunteer deleted successfully.");';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Error!! Volunteer not deleted.");';
        echo '</script>';
    }
    
    // Close the statement
    $stmt->close();
    
    // Display a confirmation prompt
    // ...
}
?>



<body>
    <h1 class="headings" style="width: 375px; margin-bottom: 20px;">View Request</h1>

    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th> Image</th>
            <th style="width:240px;">Action</th>
        </thead>


        <?php
// Database connection details
// ...

// Retrieve data from the table
$query = "SELECT * FROM volunteer";
$result = mysqli_query($con, $query);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {

    // Fetch and display each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        $categoryId = $row['id'];

?>
        
        <tbody>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["subject"] ?></td>
        <td><?php echo $row["area"] ?></td>
        <td><img src="../uploads/<?php echo $row["image"]; ?>" alt="Article Image" /></td>
            <td>
            <form method="post" onsubmit="return confirmDelete();">
                    <input type="hidden" name="categoryId" value=<?php echo $categoryId; ?>>
                    <button style="margin-left:90px" class="btn" type="submit" name="btnDelete">Delete</button>
            </form> </td>
        </tbody>

        <?php
    }

} else {
    echo '<p>No data found.</p>';
}

// Close the database connection
mysqli_close($con);
?>

    </table>
</body>
</html>