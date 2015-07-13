<?php
session_start();
require_once('config.php');
if ($_COOKIE['surveyok'] and $_SESSION['surveyok']){
  echo "The survey will be completed. Please wait the redirecting.. ";
  setcookie('surveyok',null);
  if (unset($_SESSION['surveyok']) && !$_COOKIE['surveyok']){
    header('refresh: 5; URL='.$survey_continue);
  } else {
    echo "UNSETTING ERROR (400x) - Please retry again";
  }
}
?>
