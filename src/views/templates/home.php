<?= $view('inc.header') ?>

<section class="bg-secondary py-7">
	<section class="container">
		<div class="row">
			<div class="col text-dark"> 
				<h1 id="b-page-title"><?= $page->getTitle() ?></h1>

				<div>
					<?= $chunk('text', 'standfirst') ?>
				</div>

		        <form class="form-inline my-2 my-lg-0">
		            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
		        </form>
			</div>
		</div>
	</section>
</section>

<section class="container py-7">
	<div class="row">
		<div class="col">
			<?= $chunk('text', 'bodycopy') ?>
		</div>
	</div>
</section>

<?= $view('inc.footer') ?>
