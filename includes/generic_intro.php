<div class="generic-intro generic-intro--dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="generic-intro__title">
                <?php if(!empty($generic_intro['heading-prefix'])): ?>
                    <span class="generic-intro__title-prefix"><?= $generic_intro['heading-prefix'] ?></span>
                <?php endif; ?>
                <?= $generic_intro['heading'] ?></h1>
                <p><?= $generic_intro['text']  ?></p>
            </div>
        </div>
    </div>
</div>
