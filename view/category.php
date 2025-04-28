<?php
echo "<li class='submenu'><a href='all'>All</a></li><br>";

foreach ($arr as $value) {
    echo "<li class='submenu unit'>
            <a href='category?id=" . $value['id'] . "'>" . $value['name'] . "</a>
          </li><br>";
}
?>
