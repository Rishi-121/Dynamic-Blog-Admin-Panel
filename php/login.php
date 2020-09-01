<?php
session_start();
if (isset($_POST['login'])) {
    $emailid = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost', 'root', '', 'renal_project', '3308');
    if ($con == false) {
        echo "Error in connection";
    } else {
        $select = "SELECT * FROM `admin_info` WHERE `emailid`='$emailid'  AND `password`='$password'";
        $query = mysqli_query($con, $select);
        $row = mysqli_num_rows($query);
        if ($row == 1) {
            $data = mysqli_fetch_assoc($query);
            $_SESSION['username'] = $data['username'];

            if ($_SESSION['username']) {
                echo '<script>alert("Hello ' . $_SESSION['username'] . '");</script>';
?>

                <script>
                    window.open('../php/blog_section.php', '_self');
                </script>

            <?php

            } else {
                echo "error!!";
            }
        } else {
            ?>
            <script>
                alert('Wrong Emailid or Password!!Please, Try Again');
                window.open('../login.html', '_self');
            </script>
<?php
        }
    }
}

?>