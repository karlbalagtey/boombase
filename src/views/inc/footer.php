	    <footer class="footer py-5 bg-dark text-white h-100">
	    	<section class="container">
		    	<div class="row">
		    		<div class="col-12 col-md-3">
		    			<p>Boombase 2018.<br> </p>

		    			<p>
							<a class="text-white" href="mailto:info@balagtey.com">admin@balagtey.com</a>
						</p>
		    		</div>

		    		<div class="col-12 col-md-3 fa-3x footer-social-icons">
		    			<a class="footer-social-link" href="#">
			    			<i class="fab fa-twitter-square"></i>
			    			<span class="sr-only">Twitter</span>
						</a>

						<a class="footer-social-link" href="#">
			    			<i class="fab fa-facebook"></i>
			    			<span class="sr-only">Facebook</span>
						</a>

		    			<a class="footer-social-link" href="#">
			    			<i class="fab fa-instagram"></i>
			    			<span class="sr-only">Instagram</span>
			    		</a>
		    		</div>

		    		<div class="col-12 col-md-3">
		    			<ul class="footer-links p-0">
		    				<?php $home = ($page->isRoot()) ? $page : Page::findByUri(''); ?>
		    				<?= $chunk('linkset', 'footer-links', $home)->template('simple')->setOptions(['link-text' => true]) ?>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-12 col-md-3 d-flex flex-column">
		    			<div class="mb-auto">
							© Boombase 2018 <br>
						</div>

		    			<a class="text-white" href="https://karl.balagtey.com/">Designed by Karl Mark Balagtey</a>
		    			<p>Built with <a class="text-white" href="https://github.com/karlbalagtey/boombase">Boombase</a></p>
		    		</div>
		    	</div>
			</section>
	    </footer>

		<script src="<?= $pub('manifest.js') ?>"></script>
		<script src="<?= $pub('vendor.js') ?>"></script>
		<script src="<?= $pub('app.js') ?>"></script>
    </body>
</html>

