<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Renal Project - Blog Section</title>
    <link rel="shortcut icon" href="../assets/logo & favicon/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <style>
        * {
            font-family: 'montserrat', Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>

    <link rel="stylesheet" href="../css/blog_section.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="ml-3" src="../assets/logo & favicon/logo.png" alt="logo" height="70" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-dark nav-link m-1" href="../upload.html" style="color:#fff;">Add Blogs & Articles</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger nav-link m-1" href="../php/logout.php" style="color:#fff;">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

    session_start();

    require '../php/connection.php';

    if ($con == false) {
        echo "Error in database connection!!";
    } else {
        $select = "SELECT * FROM `articles_blogs`";
        $query = mysqli_query($con, $select);
        echo "<div style='margin-top:3rem;'></div>";
        while ($row = mysqli_fetch_assoc($query)) {
            echo '
                 
                   
            <div class="container shadow" style="padding:5%;">
                <div class="row">
                  <div class="col-lg-2 col-md-3">
                    <img class="article-writer" src=" ' . $row["profile pic"] . ' " alt="" />
                  </div>
                  <div class="writer-details col-lg-10 col-md-9">
                    <h4 class="mb-2">' . $row["name"] . '</h4>
                    <small class="text-muted"><em>' . $row["article_upload_date_time"] . '</em></small>
                  </div>
                </div>
                <h2 style="margin-top:3rem;">
                  ' . $row["article_headline"] . '
                </h2>
                <img
                  class="article-image m-3"
                  src=" ' . $row["article_image"] . ' "
                />
                <p class="article-text mt-3">
                 ' . $row["article_content"] . '
                </p>

                <hr/>

                <a href="../php/blog_edit.php?id=' . $row['id'] . '" type="button" class="btn btn-dark edit mr-3 text-white">Edit</a>

                <a href="#" type="button" class="btn btn-danger delete text-white">Delete</a>

                '; ?>

            <script>
                $('.delete').click(() => {
                    if (confirm("Are you sure?")) {
                        $('.delete').attr("href", "../php/blog_delete.php?id=<?php echo $row['id']; ?>");
                    }
                })
            </script>

    <?php


            // <a href="../php/blog_delete.php?id=' . $row['id'] . '" type="button" class="btn btn-danger delete text-white">Delete</a>

            echo '</div>

                <hr />
                
                ';
        }
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>