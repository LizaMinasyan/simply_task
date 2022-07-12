<?php
session_start();
session_destroy();
header("location:http://task.loc/views/login.php");