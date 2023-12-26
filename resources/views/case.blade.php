@extends('layouts.app')
@section('title', '實績案例')
@section('main')
    <!--正文begin-->
    <div class="about_bg3">
        <div class="about_t3  anim anim-1">工程案例</div>
        <div class="case_ul anim anim-2">
            <ul>
                @foreach ($data as $item)
                    <li>
                        <div class="bg-list-img">
                            <a href="javascript:void(0)"><img src="/uploads/{{ $item->image }}" alt="{{ $item->title }}"></a>
                        </div>
                        <div class="bg-list-tit">
                            <h4>{{ $item->title }}</h4>
                        </div>
                        <label class="bg-list-more"></label>

                        <div class="i_pro_bg">
                            <a href="javascript:void(0)">
                                <div class="bg-list-hs"
                                    style=" background:url(images/596747f854a8c.png) center top no-repeat;background-size:100% 100%">
                                    <div class="bg-list-sub-hs">
                                        {!! $item->desc !!}
                                    </div>
                                </div>
                                <div class="bg-list-yew">
                                    <h5>{{ $item->title }}</h5>
                                </div>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- <div class="pages anim anim-3 yema">
            <div> <span class="current">1</span><a class="num" href="#">2</a> <a class="next"
                    href="#">>></a> </div>
        </div> --}}
    </div>
    <!--正文end-->

    <script language="javascript" src="js/foot.js"></script>
    <!--彈窗begin-->
    <div class="case_bgs">&nbsp;</div>
    <div class="case_tc">
        <div class="case_divs">
            <img src="/assets/picture/close.png" class="closed" />
            <img src="/assets/picture/i_pro_img1.jpg" alt="" id="tc_big" />
            <div class="case_txt">
                <h2>橋梁工程領域</h2>
                <p>
                    描述
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
        $(".case_ul ul li").click(function() {
            $(".case_txt").find("h2").html($(this).find("h4").html());
            $(".case_txt").find("p").html($(this).find("p").html());
            $("#tc_big").attr("src", $(this).find("img").attr("src"))
            $(".case_bgs").fadeIn();
            $(".case_tc").fadeIn();
            $(".case_tc").animate({
                height: $(".case_tc").find("#tc_big").height() + $(".case_txt").height() + 50,
                top: "170px"
            });
        })
    </script>
    <!--彈窗end-->
@endsection
