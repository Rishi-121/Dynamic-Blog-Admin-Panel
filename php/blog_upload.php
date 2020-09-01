<?php
if (isset($_POST['submit'])) {

    require '../php/connection.php';

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

        $insert = "INSERT INTO `articles_blogs`(`name`, `emailid`, `work_designation`,`profile pic`,`article_headline`,`article_content`,`article_image`) VALUES ('$name','$email','$designation','$profilePicDestination','$headLine','$articleContent','$articleImageDestination')";
        $row = mysqli_query($con, $insert);
        if ($row == true) {

?>
            <script>
                alert('Article added Successfully!');
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