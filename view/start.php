<?php
ob_start();
?>
<h1>Top 3 News</h1>
<br>
<?php
// Fix the content output (assuming you want to output some dynamic content)
echo "View News: News By Category (Sar)";

// Get the output buffer content
$content = ob_get_clean();

// Include the layout file (correct the path if needed)
include_once 'view/layout.php';
?>
