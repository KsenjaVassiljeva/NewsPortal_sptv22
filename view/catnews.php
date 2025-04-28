<?php
ob_start();  // Start output buffering
?>
<h1>Uudised (kategooriad)</h1>  <!-- Corrected the <h1> tag -->
<br>
<?php
ViewNews::NewsByCategory($arr);  // Corrected method call and variable usage
$content = ob_get_clean();  // Capture the output into the $content variable
include_once 'view/layout.php';  // Corrected include_once syntax
?>
