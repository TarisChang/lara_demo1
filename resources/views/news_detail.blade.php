@extends('layouts.app')
@section('title', '最新消息')
@section('main')
    <!--正文begin-->
    <div class="news_bg2">
        <div class="wrap2">
            {{-- <div class="news_t2 anim anim-1">專業知識</div> --}}
            <div class="about_x anim anim-2">
                <h1 class="show_t">{{ $data->title }}</h1>

                <div class="con_line">發佈日期： {{ $data->news_at }}</div>
                <div class="con_id">
                    <center>
                        <p style="text-align: center"><img src="/uploads/{{ $data->image }}" title="{{ $data->title }}" />
                        </p>
                    </center>
                    {!! $data->content !!}
                </div>
                <div class="fenxiang">
                    {{-- <div class="bdsharebuttonbox" style="float:right;"><a href="#" class="bds_more"
                            data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空間"></a><a
                            href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#"
                            class="bds_tqq" data-cmd="tqq" title="分享到騰訊微博"></a><a href="#" class="bds_weixin"
                            data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_fbook" data-cmd="fbook"
                            title="分享到Facebook"></a><a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a>
                    </div> --}}
                    {{-- <script>
                        window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "24"
                            },
                            "share": {}
                        };
                        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src =
                            'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                    </script>
                    <span class="span">分享到：</span> --}}
                </div>
                <div class="prenext">

                    {{-- <span class="l">
                        上一篇：<a href="#">銲割自動化解決方案</a> <br />
                        下一篇：<a href="#">高速銲接工藝</a> </span> --}}

                    <a href="javascript:history.back()" class="goback">返回列表</a>
                </div>

            </div>

        </div>

    </div>
    <!--正文end-->
@endsection
