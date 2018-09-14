	    <footer class="footer py-5 bg-success text-white h-100">
	    	<section class="container">
		    	<div class="row">
		    		<div class="col-12 col-md-6">
		    			<p><?= $chunk('text', 'footer-text-1') ?><br> </p>

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
							<?= $chunk('text', 'footer-text-2') ?> <br>
						</div>

		    			<p><?= $chunk('text', 'footer-text-3') ?> <a class="text-white" href="https://github.com/karlbalagtey/boombase">Boombase</a></p>
		    		</div>
		    	</div>
			</section>
	    </footer>

		<script src="<?= $pub('manifest.js') ?>"></script>
		<script src="<?= $pub('vendor.js') ?>"></script>
		<script src="<?= $pub('app.js') ?>"></script>
    </body>
</html>

