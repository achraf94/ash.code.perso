
<input type="hidden" id="moi" value="<?php echo $moi; ?>">
<input type="hidden" id="autre" value="<?php echo $autre; ?>">
<script>
    $(function () {
        var $messages = $('.messages-content'), d, m, i = 0, msg;
        var currentID = $("#moi").val();
        var idUser = $("#autre").val();
        var base = $("#baseurl").val();
        $('.messages-content').mCustomScrollbar();
        setInterval(function () {
            getmsg();
            checkKeyDown();
        }, 5000);

        function insertMessage() {
            msg = $('.message-input').val();
            if ($.trim(msg) === '') {
                return false;
            }
            $('.message-input').val(null);
            setmsg(currentID, idUser, msg);
            setcheckKeyDown("delete");
        }

        $(".message-submit").click(function () {
            insertMessage();
        });
        $(".message-input").on('keydown', function (e) {
            if ($(this).val() !== "") {
                setcheckKeyDown("insert");
            } else {
                setcheckKeyDown("delete");
            }
        });
        var execuno = 1;
        function checkKeyDown() {
            $.post(base + "index.php/c_raid/checkKeyDown", {id1: currentID, id2: idUser}, function (data) {
                if (data === 'plein') {
                    if (execuno === 1) {
                        execuno = 1;
                        $messages.find(".message").last().after('<div class="message loading new"><figure class="avatar"><img src="' + base + 'assets/img/<?php echo $users[0]->Picture; ?>" /></figure><span></span></div>').animate({scrollTop: $(document).height()}, 1000);
                    }
                } else {
                    $messages.find(".loading").remove();
                }
            });
        }
        function setcheckKeyDown(e) {
            $.post(base + "index.php/c_raid/setcheckKeyDown", {id1: currentID, id2: idUser, type: e});
        }
        function getmsg() {
            $.post("http://localhost:8081/ash.code.perso/codeigniter_m/index.php/c_raid/getMsg/", {id1: currentID, id2: idUser}, function (data) {
                $messages.html(data).animate({scrollTop: $(document).height()}, 1000);
            });
        }
        function setmsg(user1, user2, msg) {
            $.post("http://localhost:8081/ash.code.perso/codeigniter_m/index.php/c_raid/setMsg/", {id1: user1, id2: user2, msg: msg});
        }
    });
</script>

<div class="chat">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="chat-title">
        <h1><?php echo $users[0]->Firstname; ?></h1>
        <h2><?php echo $users[0]->Lastname; ?></h2>
        <figure class="avatar">
            <img src="<?php echo base_url(); ?>assets/img/<?php echo $users[0]->Picture; ?>">
        </figure>
    </div>
    <div class="messages">
        <div class="messages-content"></div>
    </div>
    <div class="message-box">
        <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
        <button type="submit" class="message-submit">Send</button>
    </div>

</div>
<div class="bg"></div>