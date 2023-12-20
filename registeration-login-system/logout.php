<?php

    if (setcookie("user",'', time() + (1 * 0),"/")) {
        echo "user logged out";
        echo '<a href="/"> home page </a>';
    }
?>
