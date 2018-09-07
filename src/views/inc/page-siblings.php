<section class="d-flex siblings-navigation flex-column flex-sm-row border-bottom">
    <div class="col-12 col-sm-6 p-0 siblings-navigation-item">
        <?php if($siblings->previous): ?>
            <a class="btn btn-primary btn-lg btn-block text-center text-truncate text-uppercase py-2 siblings-navigation-btn" href="<?= $siblings->previous->url ?>"><?= isset($previous_text) ? $previous_text : $siblings->previous->title ?></a>
        <?php endif ?>
    </div>
    
    <div class="col-12 col-sm-6 p-0 siblings-navigation-item">
        <?php if($siblings->next): ?>
            <a class="btn btn-primary btn-lg btn-block text-center text-truncate text-uppercase py-2 siblings-navigation-btn" href="<?= $siblings->next->url ?>"><?= isset($next_text) ? $next_text : $siblings->next->title ?></a>
        <?php endif ?>
    </div>
</section>