<?php
ob_start();  // Start output buffering
?>
<br>
<?php
ViewNews::ReadNews($n);  // Corrected the method call syntax
$content = ob_get_clean();  // Capture the output into the $content variable
include_once 'view/layout.php';  // Corrected the include_once syntax
?>
