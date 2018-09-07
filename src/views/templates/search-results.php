<?= $view('inc.header') ?>

<div class="container mt-10">
    <section class="row">
        <div class="col-12 col-md-6">
            <h1 class="text-title" id="b-page-title"><?= $page->getTitle() ?></h1>
            <?= $chunk('text', 'standfirst')->setHtml('<div class="standfirst my-3">{text}</div>') ?>
        </div>
    </section>
</div>

<section class="search-result-list mt-2 mb-6">
    <?php if ($request->has('search')): ?>

        <?php $results = $getPages(['search' => $request->input('search')]) ?>

        <?php foreach ($results as $result): ?>
            <div data-href="<?= $result->url() ?>" class="search-result-item">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-result">
                                <h2 class="text-bold-font text-bodycopy text-primary mb-1"><?= $result->getTitle() ?></h2>
                                <p class="text-bodycopy m-0"><?= $chunk('text', 'standfirst', $result)->text() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    <?php else: ?>
        <div class="container">
            <p class="h3">Your search returned no results.</p>
        </div>
    <?php endif ?>
</section>

<?= $view('inc.footer') ?>
