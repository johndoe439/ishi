<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Trust Bridge Logistics</title>
    <meta name="description" content="Trust Bridge Logistics - Logistics & Delivery Company " />
    <meta name="keywords"
        content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking" />
    <link rel="shortcut icon" href="/assets/img/bg/f-bg.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/video.min.css" />
    <link rel="stylesheet" href="assets/css/animated-slider.css" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/rs6.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css" />



</head>

<body>
    <!-- Start of header section
 ============================================= -->
    <header id="ft-header" class="ft-header-section header-style-two">
        <div class="ft-header-top">
            <div class="container">
                <div class="ft-header-top-content d-flex justify-content-between align-items-center">
                    <div class="ft-header-top-cta ul-li">
                        <ul>
                            <li><i class="fal fa-envelope"></i>Inquire@trustbridgelogistics.com</li>
                            <li>
                                <i class="fal fa-map-marker-alt"></i>200 WallStreet Street, NY
                                York, USA
                            </li>
                        </ul>
                    </div>
                    <div class="ft-header-cta-info d-flex">
                        <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="ft-header-cta-text headline pera-content">
                            <p>Contact</p>
                            {{-- <h3></h3> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-header-main-menu-wrapper">
            <div class="container">
                <div class="ft-header-main-menu-area position-relative">
                    <div
                        class="ft-header-main-menu d-flex align-items-center justify-content-between position-relative">
                        <div class="ft-site-logo-area">
                            <div class="ft-site-logo position-relative">
                                <a href="{{ route('welcome') }}"><img src="assets/img/logo/logo3.png"
                                        alt=""width="70px" /></a>
                            </div>
                        </div>
                        <div class="ft-main-navigation-area">
                            <nav class="ft-main-navigation clearfix ul-li">
                                <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li><a href="#">About</a></li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#profile">Tracking</a>
                                    </li>

                                    <li>
                                        <a href="#fag">Fag</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="ft-header-cta-btn">
                            <a class="d-flex justify-content-center align-items-center" href="#home">Get A
                                Quote</a>
                        </div>
                    </div>
                    <div class="mobile_menu position-relative">
                        <div class="mobile_menu_button open_mobile_menu">
                            <i class="fal fa-bars"></i>
                        </div>
                        <div class="mobile_menu_wrap">
                            <div class="mobile_menu_overlay open_mobile_menu"></div>
                            <div class="mobile_menu_content">
                                <div class="mobile_menu_close open_mobile_menu">
                                    <i class="fal fa-times"></i>
                                </div>
                                <div class="m-brand-logo">
                                    <a href="{{ route('welcome') }}"><img src="assets/img/logo/logo3.png" alt=""
                                            width="70px" /></a>

                                </div>
                                <nav class="mobile-main-navigation clearfix ul-li">
                                    <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                        <li class="dropdown">
                                            <a href="#">Home</a>

                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="dropdown">
                                            <a href="#">Services</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#profile">Tracking</a>

                                        </li>

                                        <li class="dropdown">
                                            <a href="#">Faq </a>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /Mobile-Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header section
============================================= -->

    {{ $slot }}



    <!-- Start of Footer   section
 ============================================= -->
    <footer id="ft-footer-2" class="ft-footer-section-2" data-background="assets/img/bg/f-bg.png">
        <div class="ft-footer-newslatter position-relative">
            <div class="container">
                <div class="ft-footer-newslatter-content d-flex justify-content-between align-items-center flex-wrap">

                </div>
            </div>
        </div>
        <div class="ft-footer-widget-wrapper-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 -bottom-16 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="logo-widget">
                                <div class="site-logo">
                                    <a href="{{ route('welcome') }}"><img src="assets/img/logo/logo3.png"
                                            alt=""width="70px" /></a>
                                </div>
                                <div class="ft-footer-address">
                                    <span>Address:200 WallStreet Street, NY
                                        York, USA</span>
                                    <span>Website: trustbridgelogistics.com</span>
                                    <span>Email: Inquire@trustbridgelogistics.com</span>
                                    {{-- <span>Phone:</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">Our Services</h3>
                                <ul>
                                    <li><a href="#">Air Freight</a></li>
                                    <li><a href="#">Ocen Freight</a></li>
                                    <li><a href="#">Warehousing</a></li>
                                    <li>
                                        <a href="#">Global stock transparency</a>
                                    </li>
                                    <li>
                                        <a href="#">Transport consolidation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="#">How it Works</a></li>
                                    <li><a href="#">Help Link</a></li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-footer-copywrite-2 text-center">
            <span>Copyright @ 2022 Logistics.All Rights Reserved</span>
        </div>
    </footer>
    <!-- End of FAQ why choose  section
 ============================================= -->

    <!-- For Js Library -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.filterizr.js"></script>
    <script src="assets/js/rbtools.min.js"></script>
    <script src="assets/js/jquery.cssslider.min.js"></script>
    <script src="assets/js/rs6.min.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/typer.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle "Get A Quote" link click
            document.querySelector('a[href="#home"]').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                // Activate the "Request A Quote" tab
                const homeTab = new bootstrap.Tab(document.querySelector('#home-tab'));
                homeTab.show();
                // Scroll to the tab section
                document.querySelector('#ft-product-mesurment').scrollIntoView({
                    behavior: 'smooth'
                });
            });

            // Handle "Tracking" link click
            document.querySelector('a[href="#profile"]').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                // Activate the "Track & Trace" tab
                const profileTab = new bootstrap.Tab(document.querySelector('#profile-tab'));
                profileTab.show();
                // Scroll to the tab section
                document.querySelector('#ft-product-mesurment').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <!-- Smartsupp Live Chat script -->
    <script>
        (function() {
            if (window.ChatWidget_wa) return;

            var config = {
                number: "16462321383",
                message: "",
                color: "#25D366",
                channel: "wa",
                boxShadow: "none",
                text: "Message Us",
                theme: "light",
                position: "right",
                mb: "20px",
                mx: "20px",
                radius: "20px"
            };

            function createWidget() {
                var widget = document.createElement('div');
                widget.id = 'chat-widget-wa';
                widget.style.cssText = 'position:fixed;' + config.position + ':' + config.mx + ';bottom:' + config.mb +
                    ';z-index:999999;cursor:pointer';

                var shadowCss = config.boxShadow === 'none' ? '' :
                    config.boxShadow === 'low' ? 'box-shadow:0 1px 3px rgba(0,0,0,0.12);' :
                    config.boxShadow === 'medium' ? 'box-shadow:0 4px 6px rgba(0,0,0,0.15);' :
                    'box-shadow:0 10px 25px rgba(0,0,0,0.2);';

                var textColor = config.theme === 'dark' ? '#000000' : '#ffffff';

                widget.innerHTML = '<div style="background-color:' + config.color + ';color:' + textColor +
                    ';padding:12px 20px;border-radius:' + config.radius +
                    ';display:flex;align-items:center;gap:8px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif;font-size:14px;font-weight:500;text-decoration:none;transition:all 0.3s ease;' +
                    shadowCss +
                    '" onmouseover="this.style.transform=\'scale(1.05)\'" onmouseout="this.style.transform=\'scale(1)\';"><svg width=\"20\" height=\"20\" viewBox=\"0 0 25 25\" fill=\"currentColor\"><path d=\"M18.1225 14.9458C17.8183 14.7895 16.3033 14.0473 16.0215 13.9469C15.7397 13.8409 15.5332 13.7907 15.3295 14.1032C15.123 14.4129 14.5371 15.102 14.3529 15.3113C14.1744 15.5178 13.993 15.5429 13.6889 15.3894C11.8808 14.4854 10.695 13.7767 9.50361 11.7315C9.18832 11.1874 9.8189 11.2265 10.4076 10.0518C10.5081 9.84534 10.4578 9.66956 10.3797 9.51331C10.3016 9.35706 9.68776 7.84478 9.43106 7.22815C9.18274 6.62826 8.92604 6.71197 8.7391 6.70081C8.56053 6.68965 8.35684 6.68965 8.15037 6.68965C7.9439 6.68965 7.61187 6.76777 7.33006 7.0719C7.04825 7.38161 6.25305 8.12659 6.25305 9.63887C6.25305 11.1511 7.35517 12.616 7.50584 12.8225C7.66209 13.0289 9.67381 16.1316 12.7625 17.4681C14.7157 18.3107 15.4802 18.3833 16.4567 18.2382C17.051 18.1489 18.2759 17.496 18.5298 16.7734C18.7837 16.0535 18.7837 15.4369 18.7084 15.3085C18.6331 15.1718 18.4266 15.0937 18.1225 14.9458Z\" fill=\"currentColor\"></path><path d=\"M24.0292 7.65625C23.3986 6.15792 22.4946 4.81306 21.3422 3.65792C20.198 2.50948 18.8395 1.5966 17.3439 0.970982C15.8093 0.326451 14.1798 0 12.5002 0H12.4444C10.7535 0.00837054 9.11567 0.343192 7.57549 1.00167C6.09267 1.63371 4.74699 2.54821 3.61344 3.6942C2.47226 4.84654 1.57661 6.18583 0.95719 7.67857C0.315449 9.22433 -0.00821224 10.8677 0.000158294 12.5586C0.00962607 14.4963 0.468048 16.4054 1.33944 18.1362V22.3772C1.33944 22.7176 1.47467 23.0441 1.71537 23.2848C1.95607 23.5255 2.28253 23.6607 2.62293 23.6607H6.86679C8.59752 24.5321 10.5067 24.9905 12.4444 25H12.5029C14.1743 25 15.7954 24.6763 17.3216 24.043C18.8097 23.4248 20.163 22.5226 21.306 21.3867C22.4583 20.2455 23.3651 18.9118 23.9985 17.4247C24.657 15.8845 24.9918 14.2467 25.0002 12.5558C25.0085 10.8566 24.6793 9.20759 24.0292 7.65625ZM19.8132 19.8772C17.8573 21.8136 15.2624 22.8795 12.5002 22.8795H12.4527C10.7702 22.8711 9.09893 22.4526 7.62293 21.6657L7.38855 21.5402H3.45998V17.6116L3.33442 17.3772C2.54759 15.9012 2.12906 14.2299 2.12069 12.5474C2.10953 9.76562 3.17259 7.15402 5.12293 5.18694C7.07047 3.21987 9.67371 2.1317 12.4555 2.12054H12.5029C13.898 2.12054 15.2513 2.39118 16.5264 2.9269C17.7708 3.44866 18.8869 4.19922 19.8467 5.15904C20.8037 6.11607 21.5571 7.23493 22.0788 8.47935C22.6201 9.76841 22.8908 11.1356 22.8852 12.5474C22.8685 15.3265 21.7775 17.9297 19.8132 19.8772Z\" fill=\"currentColor\"></path></svg>' +
                    config.text + '</div>';

                widget.onclick = function() {
                    window.open('https://wa.me/+16462321383', '_blank');
                };

                document.body.appendChild(widget);
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', createWidget);
            } else {
                createWidget();
            }

            window.ChatWidget_wa = true;
        })();
    </script>


</body>


</html>
