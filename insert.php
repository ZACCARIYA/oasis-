<?php 

include ('./db.php');

if (isset($_POST['update'])) {
  
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['prix']);
    $image = $_FILES['image'];
    $image_location = $image['tmp_name'];
    $image_name = $image['name'];
    $image_up = "image/" . $image_name;

   
    if (move_uploaded_file($image_location, $image_up)) {
        
        $insert = "INSERT INTO project_gestion (name, prix, image) VALUES ('$name', '$price', '$image_up')";
        if (mysqli_query($conn, $insert)) {
            echo "<script>alert('Product added successfully!');</script>";
        } else {
            echo "<script>alert('Failed to add product.');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload image.');</script>";
    }


    // header('Location: pro.php');
}
?>
