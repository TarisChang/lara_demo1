<!--尾部begin-->
<div class="foot_bg">
    <div class="foot_con">
        <div class="foot_con_l">
            <img src="/uploads/{{ $global['logo'] ?? '' }}" class="foot_con_logo" width="50" />
            <div class="foot_con_a">
                <a href="{{ route('home') }}">首頁</a>&nbsp;｜&nbsp;
                <a href="{{ route('about') }}">關於我們</a>&nbsp;｜&nbsp;<a href="{{ route('product') }}">産品與服務</a>&nbsp;｜&nbsp;<a
                    href="{{ route('news') }}">最新消息</a>&nbsp;｜&nbsp;<a
                    href="{{ route('case') }}">工程案例</a>&nbsp;｜&nbsp;<a href="{{ route('contact') }}">聯系我們</a>
            </div>
        </div>
        <div class="foot_con_r">
            {{-- <img src="qrcode"/> --}}
            <ul>
                <li><a href="tel:04-2500-0000" class="tel">04-2500-0000</a></li>
                <li><a href="mailto:sales@example.com" class="email">sales@example.com</a></li>
                <li>艾克思電氣有限公司 All rights reserved</li>
            </ul>
        </div>
    </div>
</div>
<a href="javascript:void(0)" class="gotop" onClick="goTop()"></a>
<!--尾部end-->
