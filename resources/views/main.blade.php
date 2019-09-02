<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("/css/material-components-web.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/mobile.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/owl.carousel.min.css") }}">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>رامان بلاگ</title>
</head>
<body>
    <header class="mdc-top-app-bar mdc-top-app-bar--dense green-back" dir="rtl" style="height: 67px;padding: 10px 20px">
        <div class="mdc-top-app-bar__row">
                <button class="mdc-icon-button material-icons mdc-top-app-bar__navigation-icon--unbounded menu-btn" data-mdc-ripple-is-unbounded="true">menu</button>
                <button class="mdc-icon-button material-icons mdc-top-app-bar__navigation-icon--unbounded menu-btn2" data-mdc-ripple-is-unbounded="true">menu</button>
                <span class="mdc-top-app-bar__title my-font font-weight-bold bold-font logo-font" style="margin-top: 14px;margin-right: 10px"><a
                            href="">رامان بلاگ</a></span>
            <section class="container">
                    <center>
                        <div class="search-back">
                            <input type="text" class="input-search" placeholder="جستوجو در بین مقالات رامان ...">
                            <button class="material-icons btn-search">search</button>
                        </div>
                    </center>
            </section>
            <a href="https://www.ramanmarket.com/" class="mdc-button mdc-ripple-surface btn-market my-font"> رامان مارکت<span class="material-icons-outlined" style="color: white;margin-right: 5px">shopping_cart</span></a>
        </div>
    </header>
    <aside class="mdc-drawer drawer1 mdc-drawer--dismissible side-bar sidebar-desk" dir="rtl" style="padding-top: 0">
        <div class="mdc-drawer__content">
            <nav class="mdc-list">
                <a class="mdc-list-item green-back drawer-a my-font" style="color: white" href="#!" aria-current="page">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true" style="color: white">home</i>
                    <span class="mdc-list-item__text">خانه</span>
                </a>
                <li class="mdc-list-item drawer-a my-font" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">category</i>
                    <a href="#!"><span class="mdc-list-item__text" style="color: black">دسته بندی</span></a>
                    <a href="#!" class="material-icons mdc-icon-button btn-ripple" style="position: absolute;left: 9px;" data-mdc-ripple-is-unbounded="true" aria-hidden="true">add</a>

                </li>
            </nav>
        </div>
    </aside>
    <aside class="mdc-drawer drawer2 mdc-drawer--modal" dir="rtl" style="width: 100%;">
        <div class="mdc-drawer__content">
            <button class="mdc-icon-button material-icons mdc-top-app-bar__navigation-icon--unbounded menu-cancel green" style="position: relative;top: 8px;right: 5px;" data-mdc-ripple-is-unbounded="true">cancel</button>
            <span class="mdc-top-app-bar__title my-font font-weight-bold bold-font logo-font green" style="margin-top: 14px;margin-right: 10px">رامان بلاگ</span>
            <nav class="mdc-list">
                <hr>
                <a class="mdc-list-item mdc-list-item--activated" href="#" aria-current="page">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>
                    <span class="mdc-list-item__text">Inbox</span>
                </a>
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">send</i>
                    <span class="mdc-list-item__text">Outgoing</span>
                </a>
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>
                    <span class="mdc-list-item__text">Drafts</span>
                </a>
            </nav>
        </div>
    </aside>

    <div class="mdc-drawer-scrim"></div>
    <section class="content">
        <div class="back-aside"></div>
        <div class="where_i">
            <div class="container">
                <span>شما اینجا هستید : </span>
                <span class="text-where">خانه</span>
                <span class="material-icons">s</span>
            </div>
        </div>
        <div class="container" style="position:relative;top: 67px;">
            <section style="margin: 10px 0" class="phone-search">
                    <div class="search-back-phone">
                        <input type="text" class="input-search" placeholder="جستوجو در بین مقالات رامان ...">
                        <button class="material-icons btn-search btn-search-phone">search</button>
                    </div>
            </section>
            <div class="slider-header">
                <a href="#!" class="more">
                    <span style="position:relative;bottom: 4px">مشاهده همه</span>
                    <i class="material-icons" style="font-size: 16px!important;">arrow_back_ios</i>
                </a>
                <span>جدیدترین ها</span>
                <div class="border-green"></div>
            </div>
            <div class="slider-content">
                <div class="owl-carousel owl-demo">
                    @for($i=0;$i<10;$i++)
                        <div class="item">
                            <a href="#!"><img class="lazyOwl" src="{{ asset('/images/1566926348.198795258_74aa187fe6a64f5dd4abbd30ff614e98.jpg') }}" alt="Lazy Owl Image"></a>
                            <div class="card-body">
                                <h4>عنوان مقاله</h4>
                                <p style="color: #9e9e9e;direction: rtl;text-align: right">
                                    <?php
                                    $value = "لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.";
                                    echo str_limit($value, 100)
                                    ?>
                                </p>
                                <div style="position:absolute;bottom: 0;left: 10px">
                                    <span style="position: relative;bottom: 6px;left: 5px;">412</span><i class="material-icons-two-tone">remove_red_eye</i>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="slider-header" style="margin-top:10px">
                <a href="#!" class="more">
                    <span style="position:relative;bottom: 4px">مشاهده همه</span>
                    <i class="material-icons" style="font-size: 16px!important;">arrow_back_ios</i>
                </a>
                <span>پر بازدیدترین ها</span>
                <div class="border-green"></div>
            </div>
            <div class="slider-content">
                <div class="owl-carousel owl-demo">
                    @for($i=0;$i<10;$i++)
                        <div class="item">
                            <a href="#!"><img class="lazyOwl" src="{{ asset('/images/farmers.jpg') }}" alt="Lazy Owl Image"></a>
                            <div class="card-body">
                                <h4>عنوان مقاله</h4>
                                <p style="color: #9e9e9e;direction: rtl;text-align: right">
                                    <?php
                                    $value = "لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.";
                                    echo str_limit($value, 100)
                                    ?>
                                </p>
                                <div style="position:absolute;bottom: 0;left: 10px">
                                    <span style="position: relative;bottom: 6px;left: 5px;">412</span><i class="material-icons-two-tone">remove_red_eye</i>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{ asset("/js/material-components-web.min.js") }}"></script>
    <script type="text/javascript">
        drawer1 = mdc.drawer.MDCDrawer.attachTo(document.querySelector(".drawer1"));
        drawer2 = mdc.drawer.MDCDrawer.attachTo(document.querySelector(".drawer2"));
        const listEl = document.querySelector('.menu-btn');
        const listEl2 = document.querySelector('.menu-btn2');
        const cancel = document.querySelector('.menu-cancel');
        drawer1.open = true;
        listEl.addEventListener('click', (event) => {
            if (drawer1.open === true) {
                drawer1.open = false
            } else {
                drawer1.open = true
            }
        });
        listEl2.addEventListener('click', (event) => {
            if (drawer2.open === true) {
                drawer2.open = false
            } else {
                drawer2.open = true
            }
        });
        cancel.addEventListener('click', (event) => {
            if (drawer2.open === true) {
                drawer2.open = false
            } else {
                drawer2.open = true
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset("/js/jquery.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/js/owl.carousel.min.js") }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $(".owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                navigation : true,
                dots: true,
                rtl:true,
                navText: [
                    "<i class='material-icons slide-right'>keyboard_arrow_right</i>",
                    "<i class='material-icons slide-left'>keyboard_arrow_left</i>"
                ],
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
        $(document).ready(function() {

            $("#owl-demo0").owlCarousel({
                navigation : true, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false
            });

        });
    </script>
    <script type="text/javascript">
        const buttons = document.querySelectorAll('.mdc-list-item,.btn-ripple,button,a');
        for (const button of buttons) {
            mdc.ripple.MDCRipple.attachTo(button);
        }
    </script>
</body>
</html>