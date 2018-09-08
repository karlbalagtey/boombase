<?= $view('inc.header') ?>

<section class="bg-secondary">
	<section class="container py-5">
		<div class="row py-4">
			<div class="col-12 col-md-6 text-dark"> 
				<h1 id="b-page-title"><?= $page->getTitle() ?></h1>

				<div>
					<?= $chunk('text', 'standfirst') ?>
				</div>
			</div>

			<div class="col-12 col-md-6 text-dark">
		        <form class="form my-2 my-lg-0 w-100" style="max-width: 350px; float: right;">
		            <input class="form-control mr-sm-2 mb-2" type="search" placeholder="Search" aria-label="Search">
		            <button class="btn btn-outline-primary my-2 my-sm-0 float-right" type="submit">Search</button>
		        </form>
			</div>
		</div>
	</section>
</section>

<section class="container py-7">
	<div class="row">
		<div class="col-12 col-md-8">
			<?= $chunk('text', 'bodycopy') ?>
		</div>
	</div>
</section>

<?= $view('inc.footer') ?>
