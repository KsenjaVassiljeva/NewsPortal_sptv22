<?php
ob_start();  // Start output buffering
?>
<h1>Kõik uudised</h1>  <!-- Corrected special character in "Kõik" -->
<br>
<?php
ViewNews::AllNews($arr);  // Corrected the method call syntax
$content = ob_get_clean();  // Capture the output into the $content variable
include_once 'view/layout.php';  // Include the layout file
?>
