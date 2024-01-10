<?php
    session_start();
    $_SESSION['lang'] = $_SESSION['lang'] ?? "English";

    if (isset($_GET['lang']) && !empty($_GET['lang'])) {
        $allowedLanguages = ["English", "Hindi", "Telugu", "Kannada", "Tamil"];
        if (in_array($_GET['lang'], $allowedLanguages)) {
            $_SESSION['lang'] = $_GET['lang'];
        } 
    }

    require_once  $_SESSION['lang'] . ".php";

    $languageFile = $_SESSION['lang'] . ".php";

    if (file_exists($languageFile)) {
        require_once $languageFile;
    } else {
        echo "Language file not found: " . $languageFile;
    }


    // Debug: Display the currently selected language
    // echo "Choose language: " . $_SESSION['lang'];
?>
