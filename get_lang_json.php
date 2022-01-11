
<?php
  function renderPhpFile($filename, $vars = null) {
    if (is_array($vars) && !empty($vars)) {
      extract($vars);
    }
    ob_start();
    include $filename;
    return ob_get_clean();
  }

  // usage
  echo renderPhpFile("/language_options.php", []);
  echo json_encode($list);
  return;
?>
