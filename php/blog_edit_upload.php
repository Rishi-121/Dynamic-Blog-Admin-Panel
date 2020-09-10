<?php

if (isset($_POST['submit'])) {

    require '../php/connection.php';

    $id = $_GET["id"];

    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $profilePic = $_FILES['profilepic']['name'];
    $headLine = $_POST['headline'];
    $articleImage = $_FILES['articleimage']['name'];
    $articleContent = $_POST['articlecontent'];


    if ($con == false) {
        echo "Error in database connection!!";
    } else {

        $profilePicDestination = '../assets/article writer/' . $profilePic;
        $articleImageDestination = '../assets/articles images/' . $articleImage;

        move_uploaded_file($profilePic, $profilePicDestination);
        move_uploaded_file($articleImage, $articleImageDestination);

        $update = "UPDATE `articles_blogs` SET `name`='$name', `emailid`='$email' , `work_designation`='$designation',`profile pic`='$profilePicDestination',`article_headline`='$headLine',`article_content`='$articleContent',`article_image`='$articleImageDestination' WHERE `id`='$id'";
        $row = mysqli_query($con, $update);
        if ($row == true) {

?>
            <script>
                alert('Article updated Successfully!');
                window.open('../php/blog_section.php', '_self');
            </script>


<?php
        } else {
            echo "Error";
        }
    }
} else {
    echo "Error in POST connection";
}

?>