<?php

session_start();

if (isset($_SESSION['viewed']) && $_SESSION['viewed'] === true) {
    echo "Vous avez visité la page create-session";
} else {
    echo "Vous n'avez pas visité la page create-session";
}
