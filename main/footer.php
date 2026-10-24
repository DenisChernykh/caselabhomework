<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer class="footer">
    <div class="footer__container">
        <p class="footer__text">контакты</p>
        <p class="footer__email">e-mail: developer@example.test</p>
        <p class="footer__tg">tg: @ChDenis</p>
    </div>
</footer>
</div>


<script
        src="https://kit.fontawesome.com/fce9a50d02.js"
        crossorigin="anonymous"
></script>
<script type="text/javascript">
    function validateEmail(email) {
        var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return reg.test(email);
    }

    $(document).ready(function() {
        $(".modalbox").fancybox();
        $("#contact").submit(function() { return false; });
        $("#send").on("click", function(){
            var emailval  = $("#email").val();
            var namevl  = $("#name").val();
            var phonevl  = $("#phone").val();
            var msgval    = $("#msg").val();
            var msglen    = msgval.length;
            var mailvalid = validateEmail(emailval);

            if(mailvalid == false) {
                $("#email").addClass("error");
            }
            else if(mailvalid == true){
                $("#email").removeClass("error");
            }
            if(mailvalid == false) {
                $("#name").addClass("error");
            }
            else if(mailvalid == true){
                $("#name").removeClass("error");
            }
            if(mailvalid == false) {
                $("#phone").addClass("error");
            }
            else if(mailvalid == true){
                $("#phone").removeClass("error");
            }
            if(msglen < 4) {
                $("#msg").addClass("error");
            }
            else if(msglen >= 4){
                $("#msg").removeClass("error");
            }

            if(mailvalid == true && msglen >= 4) {
                // если обе проверки пройдены
                // сначала мы скрываем кнопку отправки
                $("#send").replaceWith("<em>отправка...</em>");
                $.ajax({
                    type: 'POST',
                    url: 'sendmessage.php',
                    data: $("#contact").serialize(),
                    success: function(data) {
                        if(data == "true") {
                            $("#contact").fadeOut("fast", function(){
                                $(this).before("<p><strong>Успешно! Ваше сообщение отправлено  :)</strong></p>");
                                setTimeout("$.fancybox.close()", 1000);
                            });
                        }
                    }
                });
            }
        });
    });
</script>

</body>

</html>