$(function() {
    var socket = io.connect("http://localhost:1376");
    var pseudoo = prompt("Quel est votre pseudo ?");
    socket.emit("nouveau_client", pseudoo);
    document.title = pseudoo + " - " + document.title;

    socket.on("message", function(data) {
            
    setMsgOtherUser(data.pseudo, data.message);
    $(".newUserAd").text(data.pseudo);
    });
    var check = 1;
    socket.on("entraindecrire", function(data) {  
        if(data.key=="true" && check==1){
          $("#boxMsg").find("div:last").append("<div class='entrainecrire'>"+data.pseudo+"<em> Entrain d'écrireclea</em></div>")
            check=0;
        }else if(data.key=="false"){
          $(".entrainecrire").detach();check = 1;
        }
      });

    socket.on("nouveau_client", function(pseudo) {
    $("#boxMsg").prepend(
    "<div><em>" + pseudo + " a rejoint le Chat !</em></div>"
    );
      
      });
  $("#send").click(function() {
    setMsgUser(pseudoo);
    
  });
  $("#Messages").keydown(function(){
    if($.trim($(this).val()).length==0){
      socket.emit("newMessage", {key:"false",pseudo:pseudoo});
    }else{
      socket.emit("newMessage", {key:"true",pseudo:pseudoo});
    }
  });
  $(document).keypress(function(e) {
    if (e.which == 13) {
      setMsgUser(pseudoo);
    }
  });
  function setMsgOtherUser(pseudo,msg){
    if ($.trim(msg.length) == 0) {
      alert("Emptu value");
    } else {
      var newMsg ="<div class=' message new'><strong class='user2'>"+pseudo+"</strong>: <span>" + msg + "</span></div>";
      $("#boxMsg").append(newMsg);
      $("#Messages")
        .val("")
        .focus();
      $("#boxMsg").scrollTop($("#boxMsg")[0].scrollHeight);
    }
  }
  function setMsgUser(user) {
    var msg = $("#Messages").val();
    socket.emit("message", msg);
    if ($.trim(msg.length) == 0) {
      alert("Emptu value");
    } else {
      var newMsg =
        "<div class='message message-personal'><strong class='user1'>"+user+"</strong>: <span>" + msg + "</span></div>";
      $("#boxMsg").append(newMsg);
      $("#Messages")
        .val("")
        .focus();
      $("#boxMsg").scrollTop($("#boxMsg")[0].scrollHeight);
    }
  }
});
