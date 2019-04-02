<!DOCTYPE html>
<html lang="en">

<head>


    <style>
    .h6,
    h6 {
        font-size: .75rem !important;
        font-weight: 500;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        line-height: 1.5em;
        text-transform: uppercase;
    }

    .name h6 {
        margin-top: 10px;
        margin-bottom: 10px;
    }



    .fixed-top {
        position: fixed;
        z-index: 1030;
        left: 0;
        right: 0;
    }

    .profile-page .page-header1 {
        height: 380px;
        background-position: center;
    }

    .page-header1 {
        height: 100vh;
        background-size: cover;
        margin: 0;
        padding: 0;
        border: 0;
        display: flex;
        align-items: center;
    }

    .header-filter:after,
    .header-filter:before {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
    }



    .main-raised {
        margin: -60px 30px 0;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .main {
        background: #FFF;
        position: relative;
        z-index: 3;
    }

    .profile-page .profile {
        text-align: center;
    }

    .profile-page .profile img {
        max-width: 160px;
        width: 100%;
        margin: 0 auto;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate3d(0, -50%, 0);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
    }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .img-fluid,
    .img-thumbnail {
        max-width: 100%;
        height: auto;
    }

    .title {
        margin-top: 30px;
        margin-bottom: 25px;
        min-height: 32px;
        color: #3C4858;
        font-weight: 700;
        font-family: "Roboto Slab", "Times New Roman", serif;
    }

    .profile-page .description {
        margin: 1.071rem auto 0;
        max-width: 600px;
        color: #999;
        font-weight: 300;
    }

    p {
        font-size: 14px;
        margin: 0 0 10px;
    }

    .profile-page .profile-tabs {
        margin-top: 4.284rem;
    }



    .tab-space {
        padding: 20px 0 50px;
    }

    .profile-page .gallery {
        margin-top: 3.213rem;
        padding-bottom: 50px;
    }

    .profile-page .gallery img {
        width: 100%;
        margin-bottom: 2.142rem;
    }

    .profile-page .profile .name {
        margin-top: -80px;
    }

    img.rounded {
        border-radius: 6px !important;
    }

    .tab-content>.active {
        display: block;
    }
    </style>
</head>

<body class="profile-page">


    <div class="page-header1" data-parallax="true" style="background-image:url('images/canvas.jpg');">
    </div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row" style="margin-top: -250px;">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="assets/img/author/img1.jpg" alt="Circle Image"
                                    class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">Christian Louboutin</h3>
                                <h6>Designer</h6>
                                <a href="" class="btn btn-just-icon btn-link btn-dribbble"><i
                                        class="fa fa-dribbble"></i></a>
                                <a href="" class="btn btn-just-icon btn-link btn-twitter"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="" class="btn btn-just-icon btn-link btn-pinterest"><i
                                        class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>An artist of considerable range, Chet Faker — the name taken
                        by Melbourne-raised, Brooklyn-based
                        Nick Murphy — writes, performs and records all of his own
                        music, giving it a warm, intimate feel
                        with a solid groove structure. </p>
                </div>

                <div class="tab-content tab-space">





                    <br>
                    <br>
                    <br>

                    <div class="dashboard-sections">
                        <div class="row">
                            <!-- style="margin-left: 90px;" -->
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-write"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Total Ad Posted</a></h2>
                                        <h3>480 Add Posted</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-add-files"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Featured Ads</a></h2>
                                        <h3>80 Add Posted</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-support"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Offers / Messages</a></h2>
                                        <h3>2040 Messages</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br>

                    <br>


                    <!-- body -->
                </div>


            </div>
        </div>
    </div>


    <script>
    var big_image;

    $(document).ready(function() {
        BrowserDetect.init();

        // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
        $('body').bootstrapMaterialDesign();

        window_width = $(window).width();

        $navbar = $('.navbar[color-on-scroll]');
        scroll_distance = $navbar.attr('color-on-scroll') || 500;

        $navbar_collapse = $('.navbar').find('.navbar-collapse');

        //  Activate the Tooltips
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

        // Activate Popovers
        $('[data-toggle="popover"]').popover();

        if ($('.navbar-color-on-scroll').length != 0) {
            $(window).on('scroll', materialKit
                .checkScrollForTransparentNavbar);
        }

        materialKit.checkScrollForTransparentNavbar();

        if (window_width >= 768) {
            big_image = $('.page-header1[data-parallax="true"]');
            if (big_image.length != 0) {
                $(window).on('scroll', materialKit.checkScrollForParallax);
            }

        }


    });

    $(document).on('click', '.navbar-toggler', function() {
        $toggle = $(this);

        if (materialKit.misc.navbar_menu_visible == 1) {
            $('html').removeClass('nav-open');
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
                $toggle.removeClass('toggled');
            }, 550);

            $('html').removeClass('nav-open-absolute');
        } else {
            setTimeout(function() {
                $toggle.addClass('toggled');
            }, 580);


            div = '<div id="bodyClick"></div>';
            $(div).appendTo("body").click(function() {
                $('html').removeClass('nav-open');

                if ($('nav').hasClass('navbar-absolute')) {
                    $('html').removeClass('nav-open-absolute');
                }
                materialKit.misc.navbar_menu_visible = 0;
                $('#bodyClick').remove();
                setTimeout(function() {
                    $toggle.removeClass('toggled');
                }, 550);
            });

            if ($('nav').hasClass('navbar-absolute')) {
                $('html').addClass('nav-open-absolute');
            }

            $('html').addClass('nav-open');
            materialKit.misc.navbar_menu_visible = 1;
        }
    });

    materialKit = {
        misc: {
            navbar_menu_visible: 0,
            window_width: 0,
            transparent: true,
            fixedTop: false,
            navbar_initialized: false,
            isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
        },

        initFormExtendedDatetimepickers: function() {
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        },

        initSliders: function() {
            // Sliders for demo purpose
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
                start: 40,
                connect: [true, false],
                range: {
                    min: 0,
                    max: 100
                }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        },

        checkScrollForParallax: function() {
            oVal = ($(window).scrollTop() / 3);
            big_image.css({
                'transform': 'translate3d(0,' + oVal + 'px,0)',
                '-webkit-transform': 'translate3d(0,' + oVal +
                    'px,0)',
                '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
                '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
            });
        },

        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > scroll_distance) {
                if (materialKit.misc.transparent) {
                    materialKit.misc.transparent = false;
                    $('.navbar-color-on-scroll').removeClass(
                        'navbar-transparent');
                }
            } else {
                if (!materialKit.misc.transparent) {
                    materialKit.misc.transparent = true;
                    $('.navbar-color-on-scroll').addClass(
                        'navbar-transparent');
                }
            }
        }, 17)
    };

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
    };

    var BrowserDetect = {
        init: function() {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this
                .searchVersion(navigator
                    .appVersion) || "Unknown";
        },
        searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
                var dataString = data[i].string;
                this.versionSearchString = data[i].subString;

                if (dataString.indexOf(data[i].subString) !== -1) {
                    return data[i].identity;
                }
            }
        },
        searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
                return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
                return parseFloat(dataString.substring(rv + 3));
            } else {
                return parseFloat(dataString.substring(index + this
                    .versionSearchString.length + 1));
            }
        },

        dataBrowser: [{
                string: navigator.userAgent,
                subString: "Chrome",
                identity: "Chrome"
            },
            {
                string: navigator.userAgent,
                subString: "MSIE",
                identity: "Explorer"
            },
            {
                string: navigator.userAgent,
                subString: "Trident",
                identity: "Explorer"
            },
            {
                string: navigator.userAgent,
                subString: "Firefox",
                identity: "Firefox"
            },
            {
                string: navigator.userAgent,
                subString: "Safari",
                identity: "Safari"
            },
            {
                string: navigator.userAgent,
                subString: "Opera",
                identity: "Opera"
            }
        ]

    };
    </script>
</body>

</html>