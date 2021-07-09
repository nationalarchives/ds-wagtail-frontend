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
</head>
<main>

    <div class="image-viewer">
        <div class="image-viewer__header">
            <div class="image-viewer__reference">
                <h1><strong>CAB 23/78</strong> <span>- Image <span id="image_number"></span> of 39</span></h1>
            </div>
            <div class="image-viewer__toolbar" id="js-viewer-toolbar">
                <button id="zoom-in" aria-controls="js-image-viewer">Zoom in</button>
                <button id="zoom-out" aria-controls="js-image-viewer">Zoom out</button>
                <button id="home" aria-controls="js-image-viewer">Reset</button>
                <button id="full-page" aria-controls="js-image-viewer">Full screen</button>
            </div>
        </div>
        <div class="image-viewer__viewer" id="js-image-viewer"></div>
        <div class="image-viewer__footer">
            <nav class="image-viewer__navigation" aria-label="Explore this record">
                <ul>
                    <li><a href="#">Record details</a></li>
                    <li><a href="/image-viewer/browse.php">All 39 images</a></li>
                </ul>
            </nav>
            <nav class="image-viewer__pagination" aria-label="Pagination">
                <ul>
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
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
                return;
            }
            full_screen_button.textContent = 'Full screen';
            full_screen_button.focus();
        }
    });

</script>

</body>
</html>