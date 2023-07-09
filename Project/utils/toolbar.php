<ul>
<?php
#require_once 'utils/functions.php';

echo '<li><a href="index.php">My Website</a></li>';
if (!is_logged_in()) {
    echo '<li><a href="User_login.php">Login</a></li>';
}
else {
    #echo '<li><a href="viewLocations.php">Locations</a></li>';
    #echo '<li><a href="viewEvents.php">Events</a></li>';
    echo '<li><a href="logout.php">Logout</a></li>';
}
?>
</ul>