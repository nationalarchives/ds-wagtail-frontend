<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/libraries/tna-toolkit.0.0.1.css">
    <link rel="stylesheet" href="/css/dist/etna.css">
    <title>CAB 24/95/8 - The National Archives</title>

    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js ';</script>

    <?php require '../includes/image-viewer-analytics-json.php' ?>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window, document, 'script', 'dataLayer', 'GTM-TQLPKH2');</script>
    <!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQLPKH2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<main>

    <div class="image-viewer" data-container-name="image-viewer">
        <div class="image-viewer__header">
            <div class="image-viewer__reference">
                <h1><strong>CAB 23/78</strong> <span>- Image <span id="image_number"></span> of 39</span></h1>
            </div>
            <div class="image-viewer__toolbar" id="js-viewer-toolbar">
                <button id="zoom-in" aria-controls="js-image-viewer" data-image-viewer-controls="Zoom in">Zoom in</button>
                <button id="zoom-out" aria-controls="js-image-viewer" data-image-viewer-controls="Zoom out">Zoom out</button>
                <button id="home" aria-controls="js-image-viewer" data-image-viewer-controls="Reset">Reset</button>
                <button id="full-page" aria-controls="js-image-viewer" data-image-viewer-controls="Full screen">Full screen</button>
            </div>
        </div>
        <div class="image-viewer__viewer" id="js-image-viewer"></div>
        <div class="image-viewer__footer">
            <nav class="image-viewer__navigation" aria-label="Explore this record">
                <ul>
                    <li><a href="#" data-link="Record details">Record details</a></li>
                    <li><a href="/image-viewer/browse.php" data-link="All images">All 39 images</a></li>
                </ul>
            </nav>
            <nav class="image-viewer__pagination" aria-label="Pagination">
                <ul>
                    <li><a href="#" data-link="Previous">Previous</a></li>
                    <li><a href="#" data-link="Next">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>


<noscript>
    <img src="/images/image-viewer/default1.jpg">
</noscript>

<script src="/scripts/libraries/openseadragon.min.js"></script>
<script type="text/javascript">

    try {
        var image_number = (new URL(document.location)).searchParams.get('image') || 1;
    } catch (error) {
        image_number = 1;
        console.log(error);
    }


    try {
        let el = document.getElementById('image_number').textContent = image_number;
    } catch (error) {
        console.log(error);
    }

    var seadragon_options = {
        id: "js-image-viewer",
        toolbar: 'js-viewer-toolbar',
        zoomInButton: "zoom-in",
        zoomOutButton: "zoom-out",
        fullPageButton: "full-page",
        showNavigator: true,
        navigatorPosition: "ABSOLUTE",
        navigatorTop: "40vh",
        navigatorLeft: "79vw",
        navigatorHeight: "20vh",
        navigatorWidth: "20vw",
        homeButton: "home",
        tileSources: {
            type: 'image_number',
            url: '/images/image-viewer/default' + image_number + '.jpg',
            buildPyramid: false
        }
    };

    var viewer = OpenSeadragon(seadragon_options);

    viewer.addHandler("full-page", function (data) {

        var full_screen_button = document.getElementById('full-page');

        if (full_screen_button) {
            if (data.fullPage) {
                full_screen_button.textContent = 'Exit full screen';
                full_screen_button.setAttribute('data-image-viewer-controls', 'Exit full screen');
                return;
            }
            full_screen_button.textContent = 'Full screen';
            full_screen_button.setAttribute('data-image-viewer-controls', 'Full screen');
            full_screen_button.focus();
        }
    });

</script>

</body>
</html>