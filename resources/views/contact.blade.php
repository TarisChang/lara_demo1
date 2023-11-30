@extends('layouts.app')
@section('title', '聯絡我們')
@section('main')
    <!--正文begin-->
    <div class="contact_bg">
        <div class="about_t3  anim anim-1">聯系</div>
        <div class="contact_con anim anim-2">
            <ul>
                <li><a href="tel:0755-82968506"><img src="/assets/picture/contact_pic1.png">

                        <h2>聯系電話</h2>400-902-1238
                    </a></li>
                <li><a href="mailto:VIP@yibaixun.com"><img src="/assets/picture/contact_pic2.png">

                        <h2>郵箱</h2>E-mail:sales@szpowertek.com
                    </a></li>
                <li><img src="/assets/picture/contact_pic3.png">

                    <p>深圳市龍華新區民治大道展滔科技大廈B座2101</p>
                </li>
            </ul>
        </div>
        <div class="contact_map anim anim-3">
            <img src="/assets/picture/contact_pic4.png">
            百度地圖上的我們&nbsp;|&nbsp;Baidu we on the map
        </div>
        <div class="contact_map2 anim anim-4">
            <img src="/assets/picture/map.jpg">
        </div>
    </div>
    <div class="about_t3  anim anim-5">建議留言</div>
    <div class="feedback_div anim anim-6">

        <form actionurl="#" method="post" onload="init()" id="qiandaoform" onSubmit="return checkform2(this);">
            <div>
                <input class="inputs2" name="name" value="您的姓名：" onFocus="if(value=='您的姓名：'){value=''}"
                    onBlur="if(value==''){value='您的姓名：'}" />
                <input class="inputs2" name="tel" value="聯系電話：" onFocus="if(value=='聯系電話：'){value=''}"
                    onBlur="if(value==''){value='聯系電話：'}" />
                <input class="inputs2" name="email" value="聯系郵箱：" onFocus="if(value=='聯系郵箱：'){value=''}"
                    onBlur="if(value==''){value='聯系郵箱：'}" />
            </div>
            <textarea name="content" cols="" rows="5" class="textarea" onFocus="if(this.value=='留言內容')this.value=''"
                onBlur="if(this.value=='')this.value='留言內容'">留言內容</textarea>
            <input type="submit" value="提交留言" class="bnts2">
        </form>
        <script language="javascript">
            function checkform2(nForm) {
                if (nForm.name.value == "您的姓名：") {
                    alert("請填寫您的姓名!");
                    nForm.name.focus();
                    return false;
                }
                if (nForm.tel.value == "聯系方式") {
                    alert("請填寫您的手機號碼!");
                    nForm.tel.focus();
                    return false;
                }
                var teln = nForm.tel.value;
                if (!(/^1[34578]\d{9}$/.test(teln))) {
                    alert("手機號碼有誤，請重填");
                    nForm.tel.focus();
                    return false;
                }
                if (nForm.email.value == "聯系郵箱：") {
                    alert("請填寫您的郵箱!");
                    nForm.email.focus();
                    return false;
                }
                $.ajax({
                    type: "post",
                    url: $('#qiandaoform').attr('actionurl'),
                    async: true,
                    data: $("#qiandaoform").serialize(),
                    success: function(data) {
                        if (data.status == 1) {
                            alert(data.info);
                            window.location.href = data.url;

                        } else {
                            alert(data.info);
                        }
                    }
                });
                return false;
            }

            function en_checkform2(nForm) {
                if (nForm.name.value == "Your name: ") {
                    alert("Fill in your name, please!");
                    nForm.name.focus();
                    return false;
                }
                if (nForm.tel.value == "Contact number：") {
                    alert("Please fill in your Contact number!");
                    nForm.tel.focus();
                    return false;
                }
                var teln = nForm.tel.value;
                if (!(/^1[34578]\d{9}$/.test(teln))) {
                    alert("The cell phone number is incorrect. Please fill it in again");
                    return false;
                }
                if (nForm.email.value == "Contact mailbox:") {
                    alert("Please fill in your Mailbox!");
                    nForm.email.focus();
                    return false;
                }
                $.ajax({
                    type: "post",
                    url: $('#qiandaoform').attr('actionurl'),
                    async: true,
                    data: $("#qiandaoform").serialize(),
                    success: function(data) {
                        if (data.status == 1) {
                            alert(data.info);
                            window.location.href = data.url;

                        } else {
                            alert(data.info);
                        }
                    }
                });
                return false;
            }
        </script>
    </div>
    <!--正文end-->
@endsection
