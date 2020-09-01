<?php

session_start();

require '../php/connection.php';

$id = $_SESSION["id"];

?>

<?php

$query = mysqli_query($con,  "SELECT * FROM `articles_blogs` WHERE `id`='$id'");

if (mysqli_num_rows($query) == 1) {

    $data = mysqli_fetch_assoc($query);

?>

    <html>

    <head>
        <title>The Renal Project - Articles & Blogs Upload</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        
        <link rel="shortcut icon" href="../assets/logo & favicon/favicon.png" type="image/x-icon" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />

        <style>
            * {
                font-family: "montserrat", Verdana, Geneva, Tahoma, sans-serif;
            }

            .head {
                margin-top: 3rem;
            }

            form {
                margin: 2% 15%;
            }

            @media (max-width: 767px) {
                form {
                    margin: 5%;
                }
            }
        </style>

    </head>

    <body>
        <button type="button" class="btn btn-danger m-3 go-back" style="font-family: 'montserrat'">
            Go Back
        </button>

        <h1 class="head text-center">Always Try to Learn from Your Mistakes</h1>

        <form class="jumbotron" method="POST" action="../php/blog_edit_upload.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputName1">Writer's Name *</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?php echo $data['name']; ?>" required autofocus />
            </div>
            <div class="form-group">
                <label for="exampleInputDesignation1">Writer's Designation *</label>
                <input type="text" class="form-control" id="exampleInputDesignation1" name="designation" value="<?php echo $data['work_designation']; ?>" required />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address *</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $data['emailid']; ?>" required />
            </div>

            <br />
            <div class="form-group">
                <label for="profilepic">Upload Your Image * </label>
                <input type="file" name="profilepic" id="profilepic" accept="image/*" value="<?php echo $data['profile pic']; ?>" />
            </div>
            <br />

            <div class="form-group">
                <label for="exampleInputHeadline1">Article Headline *</label>
                <input type="text" class="form-control" id="exampleInputHeadline1" name="headline" value="<?php echo $data['article_headline']; ?>" required />
            </div>

            <br />
            <div class="form-group">
                <label for="articleimage">Upload Article Image * </label>
                <input type="file" name="articleimage" id="articleimage" accept="image/*" value="<?php echo $data['article_image']; ?>" />
            </div>
            <br />

            <div class="form-group">
                <label for="exampleInputContent1">Article Content *</label>
                <textarea class="form-control" id="exampleInputContent1" name="articlecontent" rows="20" cols="30" required><?php echo $data['article_content']; ?></textarea>
            </div>

            <br />

            <button type="submit" class="btn btn-dark m-3 update" name="submit">
                Save Changes
            </button>
            <button type="reset" class="btn btn-secondary m-3">Reset</button>
            <button type="button" class="btn btn-danger m-3 go-back">Cancel</button>
        </form>

    <?php
}
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script>
        $(".go-back").click(() => {
            if (confirm("Are sure you want to go back?")) {
                <?php session_destroy(); ?>
                window.open("../php/blog_section.php", "_self");
            }
        })

        $(".update").click(() => {
            if (confirm("Please confirm your submission!")) {}
        })
    </script>

    </body>

    </html>