<!-- Whitespace between <li> elements affects the look of this component on mobile. -->
<div class="pagination">
  <ol class="pagination__list">
    <li class="pagination__list-item">
      <a class="pagination__page-chevron-previous" href="#"><span class="sr-only">Previous page</span></a>
    </li><li class="pagination__list-item">
        <a class="pagination__page-link-current" href="#">1</a>
    </li><?php for ($i=2; $i <= 10 ; $i++): ?><li class="pagination__list-item"><a class="pagination__page-link" href="#"><?php echo $i ?></a></li><?php endfor; ?><li class="pagination__list-item">
      <a class="pagination__page-chevron-next" href="#"><span class="sr-only">Next page</span></a>
    </li>
  </ol>
</div>