<?php

session_start();

session_destroy();

echo "<script>alert('You are successfully logged out');</script>";
echo "<script>window.open('../login.html', '_self');</script>";
