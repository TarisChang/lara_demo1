@extends('layouts.app')
@section('title', '首頁')
@section('head')
    <link rel="stylesheet" href="/assets/css/slide.css">
@endsection
@section('main')
    {{-- 輪播 --}}
    <div class="module-content">
        <div class="slideshow carousel clearfix" style="height:750px; overflow:hidden;">
            <div id="carousel-211899">
                @foreach ($banners as $item)
                    <div class="carousel-item">
                        <div class="carousel-img"><a href="javascript:void(0);"><img src="/uploads/{{ $item->image }}"
                                    width="100%" height="300" alt="{{ $item->alt }}" /></a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="carousel-btn carousel-btn-fixed" id="carousel-page-211899"></div>
            <div class="carousel-page">
                <div class="carousel-prev" id="carousel-prev-211899"></div>
                <div class="carousel-next" id="carousel-next-211899"></div>
            </div>
        </div>
        <script type="text/javascript">
            $(window).bind("load resize", function() {

                $("#carousel-211899").carouFredSel({

                    width: '100%',

                    items: {
                        visible: 1
                    },

                    auto: {
                        pauseOnHover: true,
                        timeoutDuration: 5000
                    },

                    swipe: {
                        onTouch: true,
                        onMouse: true
                    },

                    pagination: "#carousel-page-211899",

                    prev: {
                        button: "#carousel-prev-211899"
                    },

                    next: {
                        button: "#carousel-next-211899"
                    },

                    scroll: {
                        fx: "crossfade"
                    } //注釋的話就是滾動的
                });

            });
        </script>
        <!-- E slideshow --><!-- End_Module_211899 -->
    </div>
    <!--輪播-->

    <!--flash start-->
    <div class="flash_div">
        <div class="flash">
            <ul class="ul_flash">
                @foreach ($banners as $item)
                    <li>
                        <a href="javascript:void(0);" title="{{ $item->alt }}"><img src="/uploads/{{ $item->image }}"
                                alt="{{ $item->alt }}"></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script type="text/javascript" src="/assets/js/idangerous.swiper-2.0.min.js"></script>
    <script type="text/javascript" src="/assets/js/index.js"></script>
    <!--flash end-->
    <!--産品中心begin-->
    {{-- <div class="i_pro_bg2">
        <div class="i_pro_t  anim anim-1">産品與服務</div>
        <div id="owl-demo2" class="owl-carousel anim anim-2">
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2688b34a7.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>脈沖氣保銲PT-Master-500DPP</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2843e4e1c.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>多功能脈沖氣保銲PT-Master-350PT/500PT</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a298fcdfe6.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>多功能脈沖氣保銲PT Master 315DP</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a15e2cdfe6.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>TIG200P MOS Digital</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a0d893567e.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>逆變等離子切割機CUT-50</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a10c51312d.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>逆變等離子切割機CUT-100</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2c6e66ff3.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>全數字化多功能氣保銲系列MIG200</h2>
                    </a>
                </dd>
            </div>
            <div class="item">
                <dd class="not-animated"><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/595f2e163ea9f.jpg" alt="">

                            <p>&nbsp;</p>
                        </div>
                        <h2>MIG-100/120 Digital</h2>
                    </a>
                </dd>
            </div>
        </div>
    </div> --}}
    <!--産品中心end-->
    <!--工程案例begin-->
    <div class="i_pro_t anim anim-1" style="bottom:2%;">Cases</div>
    <div id="owl-demo" class="owl-carousel anim anim-2">
        @foreach ($cases as $item)
            <div class="item">
                <div class="bg-list-img">
                    <a href="javascript:void(0)"><img class="lazyOwl" data-src="/uploads/{{ $item->image }}"
                            alt=""></a>
                </div>
                <div class="bg-list-tit">
                    <h4>{{ $item->title }}</h4>
                </div>
                <label class="bg-list-more"></label>

                <div class="i_pro_bg">
                    <a href="javascript:void(0)">
                        <div class="bg-list-hs"
                            style=" background:url(/assets/images/59674831c07c9.png) center top no-repeat;">
                            <div class="bg-list-sub-hs">
                                {!! $item->desc !!}
                            </div>
                        </div>
                        <div class="bg-list-yew">
                            <h5>{{ $item->title }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <!--工程案例end-->
    <!--關於我們begin-->
    <div class="i_about">
        <div class="i_about_t anim anim-1">About Us</div>
        <div class="i_about_con">
            <div class="imgs anim anim-2">
                <img src="/assets/picture/about_rail.jpg" />
            </div>
            <div class="i_about_r anim anim-3">
                <div class="i_about_txt">
                    <h2 class="mb-1">A Global Supplier for Railway Rail Grinding</h2>
                    <h3 class="mb-1">Expert in Rail Grinding, Rail Grinder Overhaul & Rail Measurement.</h3>
                    <p class="mb-1" >Welcome to Rail Work, your premier global supplier for railway rail grinding solutions. With a commitment to excellence and a wealth of expertise, we specialize in three key areas: Rail Grinding, Rail Grinder Overhaul, and Rail Measurement. At Rail Work Ltd., we take pride in delivering professional services that ensure the optimal performance and safety of metro systems and high-speed rail (HSR) networks.</p>
                    <p class="mb-1">
                        At Rail Work Ltd., we are dedicated to setting new standards in rail maintenance. Experience the difference with our professional services designed to elevate the performance and safety of metro systems and high-speed rail networks. Join us in shaping the future of railway transportation.
                    </p>
                </div>
                <a href="{{ route('about') }}" class="i_about_more">More</a>
            </div>

            <div class="c_l"></div>
        </div>
    </div>
    <!--關於我們end-->
    @if ($news->isNotEmpty())
        <!--最新消息begin-->
        <div class="i_news_bg">
            <div class="i_about_t anim anim-1">News</div>
            {{-- <div class="i_news_a anim anim-2">

            <a href="javascript:void(0)" j class="osel">新聞動態</a>

            <a href="javascript:void(0)">銲接資訊</a>

        </div> --}}
            <div class="i_news_con anim anim-3">
                <div class="i_news_div" style="display:block;">
                    <!--公司資訊begin-->
                    <div id="owl-demo3" class="owl-carousel">
                        <div class="item">
                            <dd class="not-animated">
                                <div class="i_news_l">
                                    <ul>
                                        @foreach ($news as $item)
                                            <li>
                                                <a href="{{ route('news.detail', $item->title) }}">
                                                    <div class="four_date">
                                                        <b>{{ date('d', strtotime($item->news_at)) }}</b>{{ date('Y-m', strtotime($item->news_at)) }}
                                                    </div>
                                                    <div class="four_txt">
                                                        <h2>{{ $item->title }}</h2>
                                                        <p>
                                                            {!! mb_substr(strip_tags($item->content), 0, 50) !!}...
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                @if ($news->isNotEmpty())
                                    <a href="{{ route('news.detail', $news[0]->title) }}">
                                        <div class="imgs">
                                            <img height="400" src="/uploads/{{ $news[0]->image }}"
                                                alt="{{ $news[0]->title }}">
                                            <h2><em>{{ $news[0]->news_at }}</em>{{ $news[0]->title }}</h2>
                                        </div>
                                    </a>
                                @endif

                            </dd>
                        </div>

                    </div>

                    <!--公司資訊end-->
                </div>
                <div class="i_news_div">
                    <!--行業資訊begin-->
                    <div id="owl-demo4" class="owl-carousel">
                        <div class="item">
                            <dd class="not-animated">
                                <div class="i_news_l">
                                    <ul>
                                        <li>
                                            <a href="{{ route('news.detail', 1) }}">
                                                <div class="four_date"><b>06</b>2023-03</div>
                                                <div class="four_txt">
                                                    <h2>高速電弧改寫工業革命</h2>
                                                    <p>
                                                        中國智造，開創高速銲接新時代！
                                                        PT SPEED MIG-500
                                                        多功能高速脈沖氣保銲 </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news.detail', 1) }}">
                                                <div class="four_date"><b>06</b>2023-03</div>
                                                <div class="four_txt">
                                                    <h2>銲割自動化解決方案</h2>
                                                    <p>
                                                        實現銲接系統的集中控制，包括集中設置、集中編程、集中操作；可在銲接過程中操作機器人，對銲接速度進行調整；對銲接過程進行編程操作，銲縫可分段，不同銲縫段設置不同銲接蓡數等。不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡
                                                    </p>
                                                </div>
                                            </a>
                                        </li>




                                        <li>
                                            <a href="{{ route('news.detail', 1) }}">
                                                <div class="four_date"><b>06</b>2023-03</div>
                                                <div class="four_txt">
                                                    <h2>銲割自動化解決方案</h2>
                                                    <p>
                                                        實現銲接系統的集中控制，包括集中設置、集中編程、集中操作；可在銲接過程中操作機器人，對銲接速度進行調整；對銲接過程進行編程操作，銲縫可分段，不同銲縫段設置不同銲接蓡數等。不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡
                                                    </p>
                                                </div>
                                            </a>
                                        </li>




                                    </ul>
                                </div>
                                <a href="{{ route('news.detail', 1) }}">
                                    <div class="imgs"><img src="/assets/picture/5932515bc4075.jpg" alt="">

                                        <h2><em>2023-06-03</em>銲割自動化解決方案</h2>
                                    </div>
                                </a>
                            </dd>
                        </div>
                        <div class="item">
                            <dd class="not-animated">
                                <div class="i_news_l">
                                    <ul>
                                        <li>
                                            <a href="{{ route('news.detail', 1) }}">
                                                <div class="four_date"><b>06</b>2023-03</div>
                                                <div class="four_txt">
                                                    <h2>銲割自動化解決方案</h2>
                                                    <p>
                                                        實現銲接系統的集中控制，包括集中設置、集中編程、集中操作；可在銲接過程中操作機器人，對銲接速度進行調整；對銲接過程進行編程操作，銲縫可分段，不同銲縫段設置不同銲接蓡數等。不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡不同銲縫段設置不同銲接蓡
                                                    </p>
                                                </div>
                                            </a>
                                        </li>




                                    </ul>
                                </div>

                                <a href="{{ route('news.detail', 1) }}">
                                    <div class="imgs"><img src="/assets/picture/5934f42d3b2c2.jpg" alt="">

                                        <h2><em>2023-06-03</em>銲割自動化解決方案</h2>
                                    </div>
                                </a>
                            </dd>
                        </div>


                    </div>
                    <script>
                        $("#owl-demo4").owlCarousel({
                            items: 1,
                            lazyLoad: true,
                            itemsDesktop: [1600, 1],
                            itemsDesktopSmall: [1279, 1],
                            itemsTablet: [768, 1],
                            itemsMobile: [479, 1],
                            autoPlay: true,
                            navigation: true
                        });
                    </script>
                    <!--行業資訊end-->
                </div>
            </div>
            <script language="javascript">
                $('.i_news_a a').hover(function() {
                    var linum = $(this).index();
                    $(this).addClass('osel').siblings().removeClass('osel');
                    $('.i_news_con .i_news_div').eq(linum).show().siblings('.i_news_div').hide()
                })
            </script>

        </div>
        <!--最新消息end-->
    @endif

    <!--服務中心begin-->
    <div class="i_service_bg">
        <div class="i_about_t anim anim-1">Technical</div>
        <em class="anim anim-2">We cherish each of your inquiries, approaching them with a professional attitude and
            providing thoughtful service to analyze and plan for you.</em>

        <div class="i_youshi anim anim-3">
            <ul>
                <li class="fadeInUp animated" data-animate="fadeInUp" data-delay="100"><a href="javascript:void(0)"><img
                            src="/assets/picture/5934cd00dbe6c.png">Precision Equipment</a></li>
                <li class="fadeInUp animated" data-animate="fadeInUp" data-delay="200"><a href="javascript:void(0)"><img
                            src="/assets/picture/5934cce85f4aa.png">Excellent Skills</a></li>
                <li class="fadeInUp animated" data-animate="fadeInUp" data-delay="300"><a href="javascript:void(0)"><img
                            src="/assets/picture/5934ccd4a8bf3.png">Professional Team</a></li>
                <li class="fadeInUp animated" data-animate="fadeInUp" data-delay="400"><a href="javascript:void(0)"><img
                            src="/assets/picture/5934ccb734db5.png">After-sales Service</a></li>
            </ul>
        </div>
        {{-- <a href="#" class="i_service_more anim anim-4">在線客服</a> --}}
    </div>
    <!--服務中心end-->
@endsection

@section('js')
    {{-- 輪播 --}}
    <script src="/assets/js/owl.carousel.js"></script>
    <script>
        $("#owl-demo2").owlCarousel({
            items: 3,
            lazyLoad: true,
            autoPlay: true,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 2],
            navigation: true
        });
    </script>

    <script>
        $("#owl-demo").owlCarousel({
            items: 5,
            lazyLoad: true,
            itemsDesktop: [1600, 4],
            itemsDesktopSmall: [1279, 3],
            itemsTablet: [768, 2],
            itemsMobile: [479, 2],
            autoPlay: true,
            navigation: true
        });
    </script>

    <script>
        $("#owl-demo3").owlCarousel({
            items: 1,
            lazyLoad: true,
            itemsDesktop: [1600, 1],
            itemsDesktopSmall: [1279, 1],
            itemsTablet: [768, 1],
            itemsMobile: [479, 1],
            autoPlay: true,
            navigation: true
        });
    </script>
    <!--彈窗begin-->
    <div class="case_bgs">&nbsp;</div>
    <div class="case_tc">
        <div class="case_divs">
            <img src="/assets/picture/close.png" class="closed" />
            <img src="/assets/picture/i_pro_img1.jpg" alt="" id="tc_big" />

            <div class="case_txt">
                <h2>橋梁工程領域2</h2>

                <p>
                    與比亞迪公司成功完成新能源汽車制造生産所需銲割設備的銷售郃同，提供TIG-315AC/DC、 Master-500DP銲接設備。<br />
                    與比亞迪公司成功完成新能源汽車制造生産所需銲割設備的銷售郃同，提供TIG-315AC/DC、 Master-500DP銲接設備。
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".closed").click(function() {
            $(".case_tc").animate({
                height: "0",
                top: "270px"
            });
            $(".case_bgs").fadeOut();
            $(".case_tc").fadeOut();

        })
        $("#owl-demo .item").click(function() {
            $(".case_txt").find("h2").html($(this).find("h4").html());
            $(".case_txt").find("p").html($(this).find("p").html());
            $("#tc_big").attr("src", $(this).find("img").attr("src"))
            $(".case_bgs").fadeIn();
            $(".case_tc").fadeIn();
            $(".case_tc").animate({
                height: $(".case_tc").find("#tc_big").height() + $(".case_txt").height() + 50,
                top: $("#owl-demo").offset().top
            });
        })
    </script>
    <!--彈窗end-->
@endsection
