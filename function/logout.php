<?php

require "connection.php";
session_start();
// logout function

// destroy session
session_destroy();

header("Location: ../login.php");
