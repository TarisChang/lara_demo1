@extends('layouts.app')
@section('title', '人才招募')
@section('main')
    <!--正文begin-->
    <div class="job_bg" style="background: url(images/5927fb358d351.png) right top no-repeat;">
        <div class="about_t3  anim anim-1">招賢納士</div>
        <div class="wrap anim anim-2">
            <div class="job_list">
                <ul>
                    @foreach ($data as $item)
                        <li>
                            <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td width="33%" style="padding-left:2%; text-align:left;">
                                        <strong>{{ $item->position }}</strong>
                                        </td>
                                        <td width="25%">{{ $item->school }}</td>
                                        <td width="10%">{{ $item->people }}人</td>
                                        <td width="25%">{{ $item->kind }}</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="padding-left:2%; text-align:left;" class="job_con">
                                            {!! $item->spec !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="padding-left:14px;display: none">
                                            <div class="job_a"><a href="#">投遞簡介</a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    @endforeach
                </ul>
            </div>
            <script language="javascript">
                $(".job_list ul li").click(function() {
                    if (this.className == "hauto") {
                        $(this).removeClass("hauto");
                    } else {
                        $(this).addClass("hauto");
                    }
                })
            </script>
        </div>
    </div>
    <!--正文end-->
@endsection
