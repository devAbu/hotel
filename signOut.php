<?php
session_start();
echo 'Sign out';
session_destroy();
header("location:index");
