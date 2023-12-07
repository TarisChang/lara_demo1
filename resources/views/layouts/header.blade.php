<header class="header-v1">
    <!-- S top-main -->
    <div class="top-main">
        <div class="logo1"><a href="{{ route('home') }}"><img src="/uploads/{{ $global['logo'] ?? '' }}" alt="{{ $global['name'] ?? '' }}" width="100"/></a></div>
        {{-- <a href="#" class="languages">EN</a> --}}

        {{-- <div class="top_search"><em></em>
            <div class="search_con">
                <form onSubmit="return checktop(this);" action="#" method="get" name="search" id="form3">
                    <input class="input1" name="title" value="Search" onFocus="if(value=='Search'){value=''}"
                        onBlur="if(value==''){value='Search'}">
                    <input name="c" type="hidden" value="Index">
                    <input name="a" type="hidden" value="Search">
                    <input type="submit" class="bnts" value="">
                </form>
                <script type="text/javascript">
                    function checktop(nForm) {
                        if (nForm.title.value == "Search") {
                            alert("請填寫搜索關鍵字!");
                            nForm.title.focus();
                            return false;
                        }
                    }

                    function checktop_en(nForm) {
                        if (nForm.title.value == "Search") {
                            alert("Please fill in the search keywords");
                            nForm.title.focus();
                            return false;
                        }
                    }
                </script>
            </div>
        </div> --}}
        <div class="top-main-content"><!-- S nav -->
            <div class="navBar">
                <ul class="nav clearfix">
                    <li id="m1" class="m {{ request()->route()->getName() == 'home'? 'on': '' }}">
                        <h3><a href="{{ route('home') }}" title="首頁">首頁</a></h3>
                    </li>
                    <li id="m2" class="m {{ in_array(request()->route()->getName(), ['about', 'history', 'culture', 'join']) ? 'on': '' }}">
                        <h3><a href="{{ route('about') }}" title="關於我們">關於我們</a></h3>
                        <div class="sub" style="display:none">
                            <dl>
                                <dd><a href="{{ route('about') }}">企業簡介</a></dd>
                                <dd><a href="{{ route('history') }}">發展歷程</a></dd>
                                <dd><a href="{{ route('culture') }}">企業文化</a></dd>
                                {{-- <dd><a href="{{ route('join') }}">人才招募</a></dd> --}}
                            </dl>
                        </div>
                    </li>
                    {{-- <li id="m3" class="m {{ in_array(request()->route()->getName(), ['product', 'product.detail']) ? 'on': '' }}">
                        <h3><a href="{{ route('product') }}" title="産品與服務">産品與服務</a></h3>
                        <div class="sub" style="display:none">
                            <dl>
                                <dd><a href="{{ route('product') }}">氣保銲系列</a></dd>
                                <dd><a href="{{ route('product') }}">氬弧銲系列</a></dd>
                                <dd><a href="{{ route('product') }}">手工銲系列</a></dd>
                                <dd><a href="{{ route('product') }}">切割機系列</a></dd>
                                <dd><a href="{{ route('product') }}">埋弧銲系列</a></dd>
                                <dd><a href="{{ route('product') }}">電子元器件</a></dd>
                            </dl>
                        </div>
                    </li> --}}
                    <li id="m4" class="m {{ in_array(request()->route()->getName(), ['news', 'news.detail']) ? 'on': '' }}">
                        <h3><a href="{{ route('news') }}" title="最新消息">最新消息</a></h3>
                    </li>
                    <li id="m6" class="m {{ request()->route()->getName() == 'case'? 'on': '' }}">
                        <h3><a href="{{ route('case') }}" title="工程案例">工程案例</a></h3>
                    </li>
                    <li id="m7" class="m {{ request()->route()->getName() == 'contact'? 'on': '' }}">
                        <h3><a href="{{ route('contact') }}" title="聯系我們">聯系我們</a></h3>
                        <div class="sub">
                            <dl></dl>
                        </div>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                jQuery(".nav").slide({
                    type: "menu",
                    titCell: ".m",
                    targetCell: ".sub",
                    effect: "slideDown",
                    delayTime: 300,
                    triggerTime: 100,
                    returnDefault: true
                });
            </script>
            <!-- E nav-->
        </div>
    </div>
    <!-- E top-main -->
    <div class="c_l"></div>
</header>

<!-- S touch-top-wrapper -->
<div class="touch-top">
    <div class="touch-top-wrapper clearfix">
        <div class="touch-logo" skinobjectzone="HtmlLogo_1514"><a class="" href="{{ route('home') }}"><img
                    src="/uploads/{{ $global['logo'] ?? '' }}" alt="{{ $global['name'] ?? '' }}" /></a></div>
        <!-- S touch-navigation -->
        <div class="touch-navigation">
            <div class="touch-toggle">
                <ul>
                    {{-- <li class="touch-toggle-item-last"><a href="javascript:void(0);" class="drawer-menu"
                            data-drawer="search_div"><i class="touch-icon-search"><span>搜索</span></i></a></li> --}}
                    <li class="touch-toggle-item-last"><a href="javascript:;" class="drawer-menu"
                            data-drawer="drawer-section-menu"><i class="touch-icon-menu"></i><span>導航</span></a></li>
                </ul>
            </div>
        </div>
        <!-- E touch-navigation -->
    </div>
    <!-- S touch-top -->
    <div class="touch-toggle-content touch-top-home">
        <!--手機搜索begin-->
        <div class="drawer-section search_div">
            <div class="search_con"><input name="names" type="text" class="input1" value="Search"
                    onFocus="if(value=='Search'){value=''}" onBlur="if(value==''){value='Search'}" /><input
                    type="submit" value="" class="bnt1" />
            </div>
        </div>
        <!--手機搜索end-->
        <!--手機菜單begin-->
        <div class="drawer-section drawer-section-menu">
            <div class="touch-menu" skinobjectzone="menu_2005">
                <ul>
                    <li><a href="{{ route('home') }}"><span>首頁</span></a></li>

                    <li><a href="javascript:;"><span>關於我們</span><i class="touch-arrow-down"></i> </a>
                        <ul>
                            <li><a href="{{ route('about') }}"><span>企業簡介</span></a></li>
                            <li><a href="{{ route('history') }}"><span>發展歷程</span></a></li>
                            <li><a href="{{ route('culture') }}"><span>企業文化</span></a></li>
                            {{-- <li><a href="{{ route('join') }}"><span>人才招募</span></a></li> --}}
                        </ul>
                    </li>
                    {{-- <li> <a href="{{ route('product') }}"><span>産品與服務</span><i class="touch-arrow-down"></i> </a>
                        <ul>
                            <li><a href="{{ route('product') }}"><span>氣保銲系列</span></a></li>
                            <li><a href="{{ route('product') }}"><span>氬弧銲系列</span></a></li>
                            <li><a href="{{ route('product') }}"><span>手工銲系列</span></a></li>
                            <li><a href="{{ route('product') }}"><span>切割機系列</span></a></li>
                            <li><a href="{{ route('product') }}"><span>埋弧銲系列</span></a></li>
                            <li><a href="{{ route('product') }}"><span>電子元器件</span></a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ route('news') }}"><span>最新消息</span></a></li>

                    <li><a href="{{ route('case') }}"><span>工程案例</span> </a>
                        <ul></ul>
                    </li>
                    <li><a href="{{ route('contact') }}"><span>聯系我們</span> </a>
                        <ul></ul>
                    </li>
                    {{-- <li><a href="#" class="languages">EN</a> </li> --}}
                </ul>
                <div class="closetitle"><img src="/assets/picture/nav_bg2.png"></div>
            </div>
        </div>
        <!--手機菜單end-->

    </div>
    <!-- E touch-top -->
</div>

<div class="touch_bg">&nbsp;</div>


<!-- E touch-top-wrapper -->
<div class="blank_h">&nbsp;</div>
