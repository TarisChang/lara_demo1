<!--尾部begin-->
<div class="foot_bg">
    <div class="foot_con">
        <div class="foot_con_l">
            <img src="/uploads/{{ $global['logo'] ?? '' }}" class="foot_con_logo" width="50" />
            <div class="foot_con_a">
                <a href="{{ route('home') }}">Home</a>&nbsp;｜&nbsp;
                <a href="{{ route('about') }}">About Us</a>&nbsp;｜&nbsp;
                <a href="{{ route('news') }}">News</a>&nbsp;｜&nbsp;<a
                    href="{{ route('case') }}">Cases</a>&nbsp;｜&nbsp;<a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
        <div class="foot_con_r">
            {{-- <img src="qrcode"/> --}}
            <ul>
                <li><a href="tel:{{ $global['tel'] ?? '' }}" class="tel">{{ $global['tel'] ?? '' }}</a></li>
                <li><a href="mailto:{{ $global['email'] ?? '' }}" class="email" target="_blank">{{ $global['email'] ?? '' }}</a></li>
                <li>{{ $global['name'] ?? '' }} All rights reserved</li>
            </ul>
        </div>
    </div>
</div>
<a href="javascript:void(0)" class="gotop" onClick="goTop()">
    <i class="fa-solid fa-circle-chevron-up gotopicon"></i>
</a>
<!--尾部end-->
