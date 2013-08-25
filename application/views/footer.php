
<!-- FOOTER SECTION
================================================ -->

    <div class="row">

      
      <div class="twelve columns">
        <hr>
        <p>Copyright &copy; 2013 YourName. All Rights Reserved.</p>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
      </div>

	<!-- Import all other JS files using HeadJS -->
	<script type="text/javascript">
	head.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.min.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.reveal.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.orbit-1.4.0.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.customforms.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.placeholder.min.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.tooltips.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/app.js");
	</script>
	<!-- End Combine and Compress These JS Files -->

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>

</body>
</html>