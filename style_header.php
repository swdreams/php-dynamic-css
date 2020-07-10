<?php

include_once 'data_header.php';

header('content-type: text/css');
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');
// etc.
?>
body {
    background: <?php echo $color; ?>;
}