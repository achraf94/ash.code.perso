<link href="../asstes/CSS/tchat.css" rel="stylesheet" type="text/css"/>
<link href="../asstes/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css"/>
<script src="../asstes/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../asstes/mCustomScrollbar/jquery.mCustomScrollbar.js" type="text/javascript"></script>
<script>
    $(function () {
        var $messages = $('.messages-content'), d, h, m, i = 0, msg;

        $('.messages-content').mCustomScrollbar();
        setTimeout(function () {
            fakeMessage();
        }, 100);


        function updateScrollbar() {
            $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
                scrollInertia: 10,
                timeout: 0
            });
        }

        function setDate() {
            d = new Date();
            if (m !== d.getMinutes()) {
                m = d.getMinutes();
                $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
            }
        }

        function insertMessage() {
            msg = $('.message-input').val();
            if ($.trim(msg) === '') {
                return false;
            }
            $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
            setDate();
            $('.message-input').val(null);
            updateScrollbar();
            setTimeout(function () {
                fakeMessage();
            }, 1000 + (Math.random() * 20) * 100);
        }

        $('.message-submit').click(function () {
            insertMessage();
        });

        $(window).on('keydown', function (e) {
            if (e.which === 13) {
                insertMessage();
                return false;
            }
        })

        var Fake = [
            'Hi there, I\'m Fabio and you?',
            'Nice to meet you',
            'How are you?',
            'Not too bad, thanks',
            'What do you do?',
            'That\'s awesome',
            'Codepen is a nice place to stay',
            'I think you\'re a nice person',
            'Why do you think that?',
            'Can you explain?',
            'Anyway I\'ve gotta go now',
            'It was a pleasure chat with you',
            'Time to make a new codepen',
            'Bye',
            ':)'
        ];

        function fakeMessage() {
            if ($('.message-input').val() !== '') {
                return false;
            }
            $('<div class="message loading new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure><span></span></div>').appendTo($('.mCSB_container'));
            updateScrollbar();

            setTimeout(function () {
                $('.message.loading').remove();
                $('<div class="message new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure>' + Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
                setDate();
                updateScrollbar();
                i++;
            }, 1000 + (Math.random() * 20) * 100);

        }
    });
</script>

<div class="chat">
    <div class="chat-title">
        <h1>Achraf</h1>
        <h2>Sugar</h2>
        <figure class="avatar"></figure>
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