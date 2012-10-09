<?php
if (!isset($_POST['js_code'])) {
  return;
}
$data = $_POST['js_code'];
header('Content-Disposition: attachment; filename="optimized.js"');
header("Content-Length: " . strlen($data));
echo $data;
exit();
