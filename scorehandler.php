<?php

// Global score handler for the entire site
define('DEFAULT_SCORE', 0);

/**
 * Updates the user's score using cookies.
 *
 * @param int $x The value to add to the user's score.
 * @return int The updated user's score.
 */

function scoreHandler($x) {
    if (!isset($_COOKIE['score'])) {
        setcookie('score', DEFAULT_SCORE, time() + 3600, '/', '', false, true); // Sets a secure, HttpOnly cookie if the user didn't have a cookie before
        $_COOKIE['score'] = DEFAULT_SCORE; // Initialize the value
    }
    $_COOKIE['score'] = intval($_COOKIE['score']) + $x; // Update the value
    setcookie('score', $_COOKIE['score'], time() + 3600, '/', '', false, true);
    return $_COOKIE['score'];
}

?>