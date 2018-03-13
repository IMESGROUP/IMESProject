<?php

if (!empty($_POST) OR !empty($_FILES)) {
    $_SESSION['save'] = $_POST;
    $_SESSION['saveFILES'] = $_FILES;

    $fichierActuel = $_SERVER['PHP_SELF'];
    if (!empty($_SERVER['QUERY_STRING'])) {
        $currentFile .= '?' . $_SERVER['QUERY_STRING'];
    }

    header('Location: ' . $currentFile);
    exit;
}
if(isset($_SESSION['save']))
{
    $_POST = $_SESSION['save'] ;
    $_FILES = $_SESSION['saveFILES'] ;
    
    unset($_SESSION['save'], $_SESSION['saveFILES']);
}

function issetArray($aArray, $arrayKey) {
    foreach ($arrayKey as $value) {
        if (!isset($aArray[$value])) {
            echo $aArray[$value];
            return false;
        }
    }return true;
}

function is_numericArray($aArray) {
    foreach ($aArray as $value) {
        if (!is_numeric($value)) {
            return false;
        }
    }return true;
}

function notEmptyArray($aArray) {
    foreach ($aArray as $value) {
        if (empty($value)) {
            return false;
        }
    }return true;
}