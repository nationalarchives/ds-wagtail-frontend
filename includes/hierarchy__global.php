<nav class="hierarchy-global hierarchy-global--sticky">

    <details id="js-hierarchy-global" open>
        <summary><div class="hierarchy-global__heading"><h2>Where am I in the catalogue?</h2></div></summary>

        <ul class="hierarchy-global__list">
            <li>
                <span class="reference">C</span><a href="/journey/record/C">Records created, acquired, and inherited by Chancery, and also of the Wardrobe, Royal Household, Exchequer and various commissions</a></span>
            </li>
            <li>
                <span class="reference">Division within C</span><a href="/journey/record/C/~15">Records of Equity Side: the Six Clerks</a></span>
            </li>
            <li>
                <span class="reference">C 5</span><a href="/journey/record/C/5">Court of Chancery: Six Clerks Office: Pleadings before 1714, Bridges</a></span>
            </li>
            <li class="current">
                <span class="location">You are here:</span>
                <span class="reference">C 5/139/35</span> Short title: Frisby v Frisby. Plaintiffs: John Frisby, William Frisby, and</span>
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
    var details_element = document.getElementById('js-hierarchy-global');

    details_element.addEventListener('click', function(e) {

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