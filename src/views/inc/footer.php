	    <footer class="footer py-5 bg-success text-white h-100">
	    	<section class="container">
		    	<div class="row">
		    		<div class="col-12 col-md-6">
		    			<p>The Coding Pits<br> </p>

		    			<ul class="footer-links p-0 list-unstyled">
		    				<?php $home = ($page->isRoot()) ? $page : Page::findByUri(''); ?>
		    				
		    				<?= $chunk('linkset', 'footer-links', $home)
		    					->template('simple')
		    					->setOptions(['link-text' => true])
		    					->params(['class' => 'text-white']) 
		    				?>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-12 col-md-6 d-flex flex-column align-items-end">
		    			<div class="mb-auto">
							© Boombase 2018 <br>
						</div>

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

