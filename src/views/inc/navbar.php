<?php $home = ($page->isRoot())? $page : Page::findByUri(''); ?>

<nav class="navbar navbar-expand-lg navbar-light px-0">
    <a class="navbar-brand" href="/"><?= $chunk('text', 'navbar-title', $home)->setHtml('<p class="mb-0">{text}</p>') ?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?= $chunk('linkset', 'navbar-links', $home)->template('nav-item')->setOptions([
                'link-title' => true
            ]) ?>
        </ul>
    </div>
</nav>