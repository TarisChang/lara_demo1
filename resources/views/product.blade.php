@extends('layouts.app')
@section('title', '產品與服務')
@section('main')
    <!--正文begin-->
    <div class="o_big"><img src="/assets/picture/596583656ee90.jpg" /></div>

    <div class="product_ul anim anim-1">
        <ul>
            <li>
                <dd><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2688b34a7.jpg" alt="">
                            <p>&nbsp;</p>
                        </div>
                        <h2>脈沖氣保銲PT-Master-500DPP</h2>
                    </a>
                </dd>
            </li>
            <li>
                <dd><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2843e4e1c.jpg" alt="">
                            <p>&nbsp;</p>
                        </div>
                        <h2>多功能脈沖氣保銲PT-Master-350PT/500PT</h2>
                    </a>
                </dd>
            </li>
            <li>
                <dd><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a298fcdfe6.jpg" alt="">
                            <p>&nbsp;</p>
                        </div>
                        <h2>多功能脈沖氣保銲PT Master 315DP</h2>
                    </a>
                </dd>
            </li>
            <li>
                <dd><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2c6e66ff3.jpg" alt="">
                            <p>&nbsp;</p>
                        </div>
                        <h2>全數字化多功能氣保銲系列MIG200</h2>
                    </a>
                </dd>
            </li>
            <li>
                <dd><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/594a2edb39387.jpg" alt="">
                            <p>&nbsp;</p>
                        </div>
                        <h2>NBC-500</h2>
                    </a>
                </dd>
            </li>
            <li>
                <dd><a href="{{ route('product.detail', 1) }}">
                        <div class="imgs"><img src="/assets/picture/595f2e163ea9f.jpg" alt="">
                            <p>&nbsp;</p>
                        </div>
                        <h2>MIG-100/120 Digital</h2>
                    </a>
                </dd>
            </li>
        </ul>
    </div>
    <div class="pages anim anim-2 yema">
        <div> <span class="current">1</span><a class="num" href="#">2</a> <a class="next" href="#">>></a>
        </div>
    </div>
    <!--正文end-->
@endsection
