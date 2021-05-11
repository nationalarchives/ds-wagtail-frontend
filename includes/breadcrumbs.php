<div class="breadcrumbs">
    <ol class="breadcrumbs__list">
        <?php

        $format = '<li class="breadcrumbs__list-item"><a class="breadcrumbs__link" href="%s">%s</a></li>';

        foreach ($content['breadcrumbs'] as $text => $href) {
            printf($format, $href, $text);
        }

        ?>
        <li class="breadcrumbs__list-item">
            <span class="breadcrumbs__current"><?= $content['page_title'] ?></span>
        </li>
    </ol>
</div>
