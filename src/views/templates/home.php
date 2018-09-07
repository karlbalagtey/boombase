<?= $view('inc.header') ?>

<section class="bg-secondary py-7">
	<section class="container">
		<div class="row">
			<div class="col text-dark"> 
				<h1 id="b-page-title"><?= $page->getTitle() ?></h1>
				<div>
					<?= $chunk('text', 'standfirst') ?>
				</div>
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
