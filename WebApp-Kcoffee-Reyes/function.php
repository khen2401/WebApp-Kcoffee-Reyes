<?php
// Function to generate navigation menu
function generateNav($nav_items) {
    foreach ($nav_items as $name => $link) {
        echo "<li><a href='$link'>$name</a></li>";
    }
}
?>
