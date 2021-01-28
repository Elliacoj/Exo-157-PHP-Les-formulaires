<?php

// Premiere ligne
if(isset($_POST['fname'])) {
    $fname = strip_tags(trim($_POST['fname']));
    echo "Bienvenue ". $fname;
}







