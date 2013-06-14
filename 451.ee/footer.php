
	<div id="footer" class="clearfix">	
		<ul class="widgets">
		<?php if ( dynamic_sidebar('footer') ) : else : ?>
		<?php endif; ?>
		</ul>
	</div>
	
	

</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>