    <!-- Nothing loading? Maybe the site you're trying to view is setting a
         X-Frame-Options header. Security bastards ruin all the fun. -->

    <div id="overlay-box" class="flipped"></div>
        <iframe id="content-box" src="<?php echo htmlentities($url); ?>"></iframe>

        <script>
            var xPos   = 0,
                yPos   = 0,
                xDelta = (Math.random() * 5) + 5,
                yDelta = (Math.random() * 5) + 5;

            setInterval(function () {
                // TODO: Really only changes on load and after window resizes
                var xMax = $(window).width()  - $('#overlay-box').width(),
                    yMax = $(window).height() - $('#overlay-box').height();

                xPos += xDelta;
                yPos += yDelta;

                if (xPos < 0) {
                    xPos   = 0;
                    xDelta = Math.abs(xDelta);
                    $('#overlay-box').addClass('flipped');
                } else if (xPos > xMax) {
                    xPos   = xMax;
                    xDelta = -Math.abs(xDelta);
                    $('#overlay-box').removeClass('flipped');
                }

                if (yPos < 0) {
                    yPos   = 0;
                    yDelta = Math.abs(yDelta);
                } else if (yPos > yMax) {
                    yPos   = yMax;
                    yDelta = -Math.abs(yDelta);
                }

            $('#overlay-box').css({left : xPos + 'px', top : yPos + 'px'});
        }, 33);  //33ms = ~30fps
    </script>
