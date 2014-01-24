    <hr>

    <footer class="container">
      <p>Normalized Feedback <?php echo date('Y'); ?></p>
    </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="//ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js" ></script>

        <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>js/main.js"></script>

		<?php if( ENVIRONMENT == "production" ){ ?>

			<script>
			    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			    s.parentNode.insertBefore(g,s)}(document,'script'));
			</script>

		<?php } ?>

    </body>
</html>