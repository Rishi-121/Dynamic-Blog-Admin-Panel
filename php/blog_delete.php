<?php

require '../php/connection.php';
$id = $_GET["id"];

$query = mysqli_query($con,  "SELECT * FROM `articles_blogs` WHERE `id`='$id'");

if (mysqli_num_rows($query) == 1) {
    $delete = mysqli_query($con, "DELETE FROM `articles_blogs` WHERE `id`='$id'");

?>

    <script>
        alert("Article deleted successfully!");
        window.open("../php/blog_section.php", '_self');
    </script>

<?php
}
