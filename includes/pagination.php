<!-- Whitespace between <li> elements affects the look of this component on mobile. -->
<nav class="pagination" role="navigation" aria-label="Results pagination">
    <ol class="pagination__list">
        <li class="pagination__list-item">
            <a class="pagination__page-chevron-previous" href="#"><span class="sr-only">Previous page</span></a>
        </li>
        <li class="pagination__list-item">
            <a class="pagination__page-link-current" href="#" aria-label="Current page, Page 1"
               aria-current="true">1</a>
        </li>
        <?php for ($i = 2; $i <= 10; $i++): ?>
            <li class="pagination__list-item">
                <a class="pagination__page-link" href="#" aria-label="Go to page <?= $i ?>"><span class="sr-only">Page </span><?= $i ?></a>
            </li>
        <?php endfor; ?>
        <li class="pagination__list-item">
            <a class="pagination__page-chevron-next" href="#"><span class="sr-only">Next page</span></a>
        </li>
    </ol>
</nav>
