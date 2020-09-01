<?php

session_start();

require '../php/connection.php';

$id = $_SESSION['id'];
echo "$id";

$delete = mysqli_query($con, "DELETE FROM `articles_blogs` WHERE `id`='$id'");

if ($delete == true) {
    session_destroy();
?>

    <script>
        alert("Article deleted successfully!");
        // window.open("../php/blog_section.php", '_self');
    </script>

<?php

}
