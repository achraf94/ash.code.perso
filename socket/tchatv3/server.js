var express = require("express");
var app = express();
var socket = require("socket.io");
var server = require("http").createServer(app);




var http_server = server.listen(3000);
function emitNewOrder(http_server) {
    var io = socket.listen(http_server);
    console.log("server run");
    io.sockets.on("connection", function(socket) {
        socket.on("new_order",function(data){
            io.emit("new_order",data);
            console.log(data)
        });
    });
}


emitNewOrder(http_server);




