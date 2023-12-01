@extends('layouts.app')
@section('title', '聯絡我們')
@section('main')
    <!--正文begin-->
    <div class="contact_bg">
        <div class="about_t3  anim anim-1">聯系我們</div>
        <div class="contact_con anim anim-2">
            <ul>
                <li><a href="tel:0755-82968506"><img src="/assets/picture/contact_pic1.png">

                        <h2>聯系電話</h2>0900-000-000
                    </a></li>
                <li><a href="mailto:VIP@yibaixun.com"><img src="/assets/picture/contact_pic2.png">

                        <h2>信箱</h2>E-mail:example@gmail.com
                    </a></li>
                <li><img src="/assets/picture/contact_pic3.png">

                    <p>艾克思網頁設計
                        <br>
                        線上快速溝通架站
                    </p>
                </li>
            </ul>
        </div>
        <div class="contact_map anim anim-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58198.69214416334!2d120.6654200486328!3d24.26211740000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691b1982cb82ad%3A0xf2ba0f89491be989!2zWC1XZWIg6Im-5YWL5oCd57ay6aCB6Kit6KiI5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1701397224761!5m2!1szh-TW!2stw"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact_map2 anim anim-4">

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
                <input class="inputs2" name="email" value="聯系信箱：" onFocus="if(value=='聯系信箱：'){value=''}"
                    onBlur="if(value==''){value='聯系信箱：'}" />
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
                if (!(/^0\d{9}$/.test(teln))) {
                    alert("手機號碼有誤，請重填");
                    nForm.tel.focus();
                    return false;
                }
                if (nForm.email.value == "聯系信箱：") {
                    alert("請填寫您的信箱!");
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
