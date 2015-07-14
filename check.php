<?php
session_start();
require_once('config.php');
if ($_COOKIE['surveyok'] and $_SESSION['surveyok']){
  echo $survey_ok;
  setcookie('surveyok',null);
  if (unset($_SESSION['surveyok']) && !$_COOKIE['surveyok']){
    header('refresh: 5; URL='.$survey_continue);
  } else {
    echo "UNSETTING ERROR (400x) - Please retry again";
  }
} else {
  echo $survey_false;
}
?>
<br>This software use RamondettiDavide Tracking
