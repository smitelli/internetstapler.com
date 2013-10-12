<?php

    if (!defined('GOOD_INIT')) die('Go away.');

?>

    <form id="landing">
        <h1>It will soon be stapling time.</h1>
        URL: <input type="text" value="http://en.wikipedia.org" id="landing-url">
        <input type="submit" value="Staple 'Er" id="landing-go">
    </form>

    <script>
        $('#landing').submit(function() {
            window.location = '/go/' + $('#landing-url').val();
            return false;
        });
    </script>
