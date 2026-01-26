<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="GARIZIM">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo/favicon.png') }}" />
        <script>(function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement);</script>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name='robots' content='max-image-preview:large' />
        <link rel='dns-prefetch' href='https://fonts.googleapis.com/' />
        
        <link rel="alternate" type="application/rss+xml" title="Garizim &raquo; Feed" href="feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Garizim &raquo; Comments Feed" href="comments/feed/index.html" />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('home/oembed/1.0/embed@url=https%253A%252F%252Fwp.dynamiclayers.net%252Findustrus%252F') }}" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('home/json/oembed/1.0/embed@url=https%253A%252F%252Fwp.dynamiclayers.net%252Findustrus%252F&amp;format=xml') }}" />

        <x-h-inline-css></x-h-inline-css>

        <link rel='stylesheet' id='contact-form-7-css' href='{{ asset('home/plugins/contact/css/styles.css@ver=6.1.4.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-google-fonts-css' href='https://fonts.googleapis.com/css?family=Work+Sans%3A600%7CTeko%3A400%2C500%2C600%2C700%7CRoboto%3A400%2C600&amp;subset=latin%2Clatin-ext' media='all' />
        <link rel='stylesheet' id='bootstrap-css' href='{{ asset('home/themes/css/bootstrap.min.css@ver=4.4.1.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-default-css' href='{{ asset('home/themes/css/default-styles.min.css@ver=1761419942.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-wp-blocks-css' href='{{ asset('home/themes/css/wp-blocks.min.css@ver=1761419942.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-main-css' href='{{ asset('home/themes/css/main.min.css@ver=1761419942.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-stylesheet-css' href='{{ asset('home/themes/style.css@ver=6.9.css') }}' media='all' />

        <link rel='stylesheet' id='owl-carousel-css' href='{{ asset('home/plugins/core/css/owl.carousel.min.css@ver=2.2.1.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-core-main-css' href='{{ asset('home/plugins/core/css/industrus-core.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('home/plugins/elementor/css/frontend.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='elementor-post-6-css' href='{{ asset('home/uploads/css/post-6.css@ver=1761211047.css') }}' media='all' />
        <link rel='stylesheet' id='slick-css' href='{{ asset('home/plugins/core/css/slick.css@ver=1.9.0.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-main-slider-css' href='{{ asset('home/plugins/core/css/widgets/main-slider.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='e-animation-fadeInLeft-css' href='{{ asset('home/plugins/elementor/lib/animations/styles/fadeInLeft.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-core-css' href='{{ asset('home/plugins/core/css/el-main.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='e-animation-fadeInUp-css' href='{{ asset('home/plugins/elementor/lib/animations/styles/fadeInUp.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='widget-icon-box-css' href='{{ asset('home/plugins/elementor/css/widget-icon-box.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-button-css' href='{{ asset('home/plugins/core/css/widgets/button.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='widget-image-css' href='{{ asset('home/plugins/elementor/css/widget-image.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='e-animation-fadeInRight-css' href='{{ asset('home/plugins/elementor/lib/animations/styles/fadeInRight.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='widget-heading-css' href='{{ asset('home/plugins/elementor/css/widget-heading.min.css@ver=3.32.5.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-service-css' href='{{ asset('home/plugins/core/css/widgets/service.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-projects-css' href='{{ asset('home/plugins/core/css/widgets/projects.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='odometer-css' href='{{ asset('home/plugins/core/css/odometer-theme-default.min.css@ver=1.0.0.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-counter-css' href='{{ asset('home/plugins/core/css/widgets/counter.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-team-css' href='{{ asset('home/plugins/core/css/widgets/team.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-skillbar-css' href='{{ asset('home/plugins/core/css/widgets/skill-bar.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-testimonial-css' href='{{ asset('home/plugins/core/css/widgets/testimonial.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-el-blog-css' href='{{ asset('home/plugins/core/css/widgets/blog.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='industrus-sponsor-carousel-css' href='{{ asset('home/plugins/core/css/widgets/sponsor-carousel.min.css@ver=1761419938.css') }}' media='all' />
        <link rel='stylesheet' id='elementor-post-52-css' href='{{ asset('home/uploads/css/post-52.css@ver=1761211047.css') }}' media='all' />
        <link rel='stylesheet' id='elementor-gf-local-roboto-css' href='{{ asset('home/uploads/google-fonts/css/roboto.css@ver=1745643718.css') }}' media='all' />
        <link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='{{ asset('home/uploads/google-fonts/css/robotoslab.css@ver=1745643721.css') }}' media='all' />
	    <link rel='stylesheet' id='elementor-gf-local-teko-css' href='{{ asset('home/uploads/google-fonts/css/teko.css@ver=1745643722.css') }}' media='all' />
	    <link rel='stylesheet' id='elementor-gf-local-worksans-css' href='{{ asset('home/uploads/google-fonts/css/worksans.css@ver=1745643724.css') }}' media='all' />
	    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{ asset('home/plugins/core/css/dl-construction-icons.min.css@ver=1.9.4.css') }}' media='all' />
	    <link rel='stylesheet' id='elementor-icons-industrus-icons-css' href='{{ asset('home/plugins/core/css/dl-construction-icons.min.css@ver=1.9.4.css') }}' media='all' />
        
        <script src="{{ asset('home/js/jquery/jquery.min.js@ver=3.7.1') }}" id="jquery-core-js"></script>
        <script src="{{ asset('home/js/jquery/jquery-migrate.min.js@ver=3.4.1') }}" id="jquery-migrate-js"></script>
        <script src="{{ asset('home/plugins/core/js/owl.carousel.min.js@ver=2.2.1') }}" id="owl-carousel-js"></script>
        <script src="{{ asset('home/plugins/core/js/wow.min.js@ver=1.3.0') }}" id="wow-js"></script>

        <link rel="https://api.w.org/" href="wp-json/index.html" />
        <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/52" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php@rsd" />
        <meta name="generator" content="EDITOSYSTEM" />
        <link rel="canonical" href="/" />
        <link rel='shortlink' href='/' />
        <meta name="generator" content="Elementor 3.32.5; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">

        <x-h-custom-css />
    </head>
    <body class="home wp-singular page-template page-template-empty-template page-template-empty-template-php page page-id-52 wp-embed-responsive wp-theme-industrus industrus header-2 custom-cursor-disable elementor-default elementor-kit-6 elementor-page elementor-page-52">
        <div class="hfeed site" id="page">
            <x-h-preloader></x-h-preloader>

            <x-h-header></x-h-header>
            
            {{ $slot }}
                
            <x-h-footer></x-h-footer>
        </div>
        <!-- #page we need this extra closing tag here -->

        <div id="scrollup">
            <button id="scroll-top" class="scroll-to-top cursor-effect">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z" />
                </svg>
            </button>
        </div>

        {{-- SCRIPTS --}}
        <script type="speculationrules">
            {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/home/*"},{"not":{"href_matches":["/home*.php","/home/wp-admin/*","/images/*", "/home/plugins/*","/home/themes/*","/home/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
        </script>
        <script>
            const lazyloadRunObserver = () => {
                const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
                const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            let lazyloadBackground = entry.target;
                            if (lazyloadBackground) {
                                lazyloadBackground.classList.add('e-lazyloaded');
                            }
                            lazyloadBackgroundObserver.unobserve(entry.target);
                        }
                    });
                }, { rootMargin: '200px 0px 200px 0px' });
                lazyloadBackgrounds.forEach((lazyloadBackground) => {
                    lazyloadBackgroundObserver.observe(lazyloadBackground);
                });
            };
            const events = [
                'DOMContentLoaded',
                'elementor/lazyload/observe',
            ];
            events.forEach((event) => {
                document.addEventListener(event, lazyloadRunObserver);
            });
        </script>
        <script src="{{ asset('home/js/dist/hooks.min.js@ver=dd5603f07f9220ed27f1') }}" id="wp-hooks-js"></script>
        <script src="{{ asset('home/js/dist/i18n.min.js@ver=c26c3dc7bed366793375') }}" id="wp-i18n-js"></script>
        <script id="wp-i18n-js-after">
            wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        </script>
        <script src="{{ asset('home/plugins/contact/swv/js/index.js@ver=6.1.4') }}" id="swv-js"></script>
        <script id="contact-form-7-js-before">
            var wpcf7 = {
                "api": {
                    "root": "home/json/",
                    "namespace": "contact/v1"
                }
            };
            //# sourceURL=contact-form-7-js-before
        </script>
        <script src="{{ asset('home/plugins/contact/js/index.js@ver=6.1.4') }}" id="contact-form-7-js"></script>
        <script src="{{ asset('home/themes/js/popper.min.js@ver=1.16.0') }}" id="popper-js"></script>
        <script src="{{ asset('home/themes/js/bootstrap.min.js@ver=4.4.1') }}" id="bootstrap-js"></script>
        <script src="{{ asset('home/js/imagesloaded.min.js@ver=5.0.0') }}" id="imagesloaded-js"></script>
        <script src="{{ asset('home/themes/js/isotope.min.js@ver=3.0.6') }}" id="isotope-js"></script>
        <script src="{{ asset('home/themes/js/modernizr-2.8.3.min.js@ver=2.8.3') }}" id="modernizr-js"></script>
        <script src="{{ asset('home/themes/js/headroom.min.js@ver=0.11.0') }}" id="headroom-js"></script>
        <script src="{{ asset('home/themes/js/jquery.smoothscroll.min.js@ver=16.1.2') }}" id="smoothscroll-js"></script>
        <script id="industrus-custom-script-js-extra">
            var industrus_data = { "cursor": "disable", "header": { "status": "enable", "mobile_status": "disable", "headroom": "disable" } };
        </script>
        <script src="{{ asset('home/themes/js/custom.min.js@ver=1761419942') }}" id="industrus-custom-script-js"></script>
        <script src="{{ asset('home/plugins/core/js/jquery.waypoints.min.js@ver=4.0.1') }}" id="waypoints-js"></script>
        <script src="{{ asset('home/plugins/core/js/lightbox.min.js@ver=1.0') }}" id="dl-lightbox-js"></script>
        <script src="{{ asset('home/plugins/core/js/industrus-core.min.js@ver=1761419938') }}" id="industrus-core-main-js"></script>
        <script src="{{ asset('home/plugins/elementor/js/webpack.runtime.min.js@ver=3.32.5') }}" id="elementor-webpack-runtime-js"></script>
        <script src="{{ asset('home/plugins/elementor/js/frontend-modules.min.js@ver=3.32.5') }}" id="elementor-frontend-modules-js"></script>
        <script src="{{ asset('home/js/jquery/ui/core.min.js@ver=1.13.3') }}" id="jquery-ui-core-js"></script>
        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "3.32.5", "is_static": false, "experimentalFeatures": { "e_font_icon_svg": true, "additional_custom_breakpoints": true, "home_screen": true, "global_classes_should_enforce_capabilities": true, "e_variables": true, "cloud-library": true, "e_opt_in_v4_page": true, "import-export-customization": true }, "urls": { "assets": "https:\/\/wp.dynamiclayers.net\/industrus\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/wp.dynamiclayers.net\/industrus\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/wp.dynamiclayers.net\/industrus\/wp-content\/uploads\/sites\/17" }, "nonces": { "floatingButtonsClickTracking": "5532cf0cb2" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 52, "title": "Industrus%20%E2%80%93%20Construction%20WordPress%20Theme", "excerpt": "", "featuredImage": false } };
        </script>
        <script src="{{ asset('home/plugins/elementor/js/frontend.min.js@ver=3.32.5') }}" id="elementor-frontend-js"></script>
        <script src="{{ asset('home/plugins/elementor/lib/jquery-numerator/jquery-numerator.min.js@ver=0.2.1') }}" id="jquery-numerator-js"></script>
        <script src="{{ asset('home/plugins/core/js/slick.min.js@ver=1.9.0') }}" id="slick-js"></script>
        <script src="{{ asset('home/plugins/core/js/main-slider.min.js@ver=1761419938') }}" id="industrus-main-slider-js"></script>
        <script src="{{ asset('home/plugins/core/js/odometer.min.js@ver=1.0.0') }}" id="odometer-js"></script>
        <script src="{{ asset('home/plugins/core/js/jquery.hoverdir.js@ver=1.0.0') }}" id="hoverdir-js"></script>
        <script src="{{ asset('home/plugins/core/js/el-scripts.min.js@ver=1761419938') }}" id="industrus-el-script-js"></script>
        <script id="wp-emoji-settings" type="application/json">
            {"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"home/js/wp-emoji-release.min.js?ver=6.9"}}
        </script>
        <script type="module">
            const a = JSON.parse(document.getElementById("wp-emoji-settings").textContent), o = (window._wpemojiSettings = a, "wpEmojiSettingsSupports"), s = ["flag", "emoji"]; function i(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function c(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data); e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0); const a = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data); return t.every((e, t) => e === a[t]) } function p(e, t) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var n = e.getImageData(16, 16, 1, 1); for (let e = 0; e < n.data.length; e++)if (0 !== n.data[e]) return !1; return !0 } function u(e, t, n, a) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !a(e, "\ud83e\u1fac8") }return !1 } function f(e, t, n, a) { let r; const o = (r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : document.createElement("canvas")).getContext("2d", { willReadFrequently: !0 }), s = (o.textBaseline = "top", o.font = "600 32px Arial", {}); return e.forEach(e => { s[e] = t(o, e, n, a) }), s } function r(e) { var t = document.createElement("script"); t.src = e, t.defer = !0, document.head.appendChild(t) } a.supports = { everything: !0, everythingExceptFlag: !0 }, new Promise(t => { let n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), c.toString(), p.toString()].join(",") + "));", a = new Blob([e], { type: "text/javascript" }); const r = new Worker(URL.createObjectURL(a), { name: "wpTestEmojiSupports" }); return void (r.onmessage = e => { i(n = e.data), r.terminate(), t(n) }) } catch (e) { } i(n = f(s, u, c, p)) } t(n) }).then(e => { for (const n in e) a.supports[n] = e[n], a.supports.everything = a.supports.everything && a.supports[n], "flag" !== n && (a.supports.everythingExceptFlag = a.supports.everythingExceptFlag && a.supports[n]); var t; a.supports.everythingExceptFlag = a.supports.everythingExceptFlag && !a.supports.flag, a.supports.everything || ((t = a.source || {}).concatemoji ? r(t.concatemoji) : t.wpemoji && t.twemoji && (r(t.twemoji), r(t.wpemoji))) });
        </script>
        <x-h-svg />
    
        <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'9bdd60099988035c',t:'MTc2ODM5NjI0Mw=='};var a=document.createElement('script');a.src='home/js/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
    </body>
</html>
