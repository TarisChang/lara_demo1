@extends('layouts.app')
@section('title', '實績案例')
@section('main')
    <div class="about_bg3">
        <div class="about_t3  anim anim-1">工程案例</div>
        <div class="case_ul anim anim-2">
            <ul>
                @foreach ($data as $item)
                    <li onclick="show_detail(this)">
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


    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            margin: auto;
            width: 30%;
            margin-top: 5rem;
            position: relative;
            background-color: #c30d23;
            border: 6px solid #b2b2b2;
            border-radius: 6px;
        }


        @media only screen and (min-width: 1200px) and (max-width: 1800px) {
            .modal-content {
                margin-top: 3rem;
            }
        }

        @media only screen and (min-width: 900px) and (max-width: 1200px) {
            .modal-content {
                margin-top: 1rem;
                width: 40%;
            }
        }

        @media only screen and (min-width: 600px) and (max-width: 900px) {
            .modal-content {
                margin-top: 0;
                width: 50%;
            }
        }

        @media only screen and (max-width: 600px) {
            .modal-content {
                margin-top: 0;
                width: 80%;
            }
        }

        .closed {
            right: 2%;
            position: absolute;
            top: 2%;
            cursor: pointer;
            width: 45px;
        }

        .modal_img {
            width: 100%;
            display: block;
        }

        .modal_text {
            padding: 3%;
            color: #fff;
            font-size: 14px;
            line-height: 22px;
        }
    </style>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <img src="/assets/picture/close.png" class="closed" />
            <img src="/assets/picture/i_pro_img1.jpg" alt="" class="modal_img" />
            <div class="modal_text">
                <h2>橋梁工程領域</h2>
                <p>
                    描述
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closed")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function show_detail(e) {
            modal.getElementsByTagName("img")[1].src = e.getElementsByTagName("img")[0].src;
            modal.getElementsByTagName("h2")[0].innerHTML = e.getElementsByTagName("h4")[0].innerHTML;
            modal.getElementsByTagName("p")[0].innerHTML = e.getElementsByTagName("p")[0].innerHTML;
            modal.style.display = "block";
        }
    </script>
@endsection
