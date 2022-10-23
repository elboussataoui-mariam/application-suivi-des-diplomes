<?php
  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="Diplome.pdf"');
  header("Content-Length: " . filesize("Diplome.pdf"));
  $fp = fopen("Diplome.pdf", "r");
  fpassthru($fp);
  fclose($fp);
?>
