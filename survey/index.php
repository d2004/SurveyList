<?php
require_once 'example.php';
$track = new RamondettiDavideTracking;
$locate = $track->Track();
if (!$_GET['completed']) {
?>

<html>
  <head>
    <title>Survey</title>
  </head>
  <body>
    <h1>Complete the example survey:</h1>
    <p><button onClick="window.location.href='?completed=true'">Complete IT</button></p>
  </body>
</html>

<?php } elseif ($_GET['completed']) { ?>

<script type="text/javascript">
  window.close()
</script>

<?php } ?>
