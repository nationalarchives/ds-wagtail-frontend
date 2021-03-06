<nav class="hierarchy-global" data-container-name="hierarchy-global">

    <details id="js-hierarchy-global" open>
        <summary>
            <div class="hierarchy-global__heading">
                <h2>Where am I in the catalogue?</h2>
            </div>
        </summary>

        <!-- data-link attributes reflect the index within the list, from 0 to n, and the catalogue level  -->

        <ul class="hierarchy-global__list">
            <li class="hierarchy-global__list-item">
                <span class="hierarchy-global__reference">C</span>
                <a href="/journey/record/C" data-link="0: Department">Records created, acquired, and inherited by Chancery, and also of the Wardrobe, Royal Household, Exchequer and various commissions</a>
            </li>
            <li class="hierarchy-global__list-item">
                <span class="hierarchy-global__reference">Division within C</span>
                <a href="/journey/record/C/~15" data-link="1: Division">Records of Equity Side: the Six Clerks</a>
            </li>
            <li class="hierarchy-global__list-item">
                <span class="hierarchy-global__reference">C 5</span>
                <a href="/journey/record/C/5" data-link="2: Series">Court of Chancery: Six Clerks Office: Pleadings before 1714, Bridges</a>
            </li>
            <li class="hierarchy-global__list-item hierarchy-global__list-item--current-item">
                <span class="hierarchy-global__location">You are here:</span>
                <span class="hierarchy-global__reference hierarchy-global__reference--white">C 5/139/35</span> Short title: Frisby v Frisby. Plaintiffs: John Frisby, William Frisby, and
            </li>
        </ul>
    </details>
</nav>

<script>

    // Set the details element as open at 1200px or above
    var manage_details_element = function() {

        var details_element = document.getElementById('js-hierarchy-global'),
            summary_element = document.querySelector('#js-hierarchy-global summary');

        if(!!details_element) {

            if(window.innerWidth < 1200) {
                details_element.removeAttribute('open');
                summary_element.setAttribute('tabindex', '0');
            } else {
                details_element.setAttribute('open', '');
                summary_element.setAttribute('tabindex', '-1');
            }
        }
    };

    // Prevent the details element from closing at 1200px or above
    var summary_element = document.querySelector('#js-hierarchy-global summary');

    summary_element.addEventListener('click', function(e) {

        if(window.innerWidth < 1200) {
            return;
        }

        e.preventDefault();

    });

    // Register event handlers
    document.addEventListener("DOMContentLoaded", function() {
        manage_details_element();
    });

    window.addEventListener("resize", function() {
        manage_details_element();
    });

</script>