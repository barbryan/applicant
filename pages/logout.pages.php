<?php

session_start();
session_destroy();
header("location: /accounts/login");
exit();