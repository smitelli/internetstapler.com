    <form id="landing">
        <h1><?php echo htmlentities($options['tagline']); ?></h1>
        URL: <input type="text" value="<?php echo $self_scheme; ?>://en.wikipedia.org" id="landing-url">
        <input type="submit" value="<?php echo htmlentities($options['button_text']); ?>" id="landing-go">
    </form>

    <script>
        $('#landing').submit(function() {
            window.location = '/go/' + $('#landing-url').val();
            return false;
        });
    </script>
