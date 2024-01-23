var http = require("http");

http
    .createServer(function(reg,res ) {
        res.writeHead(200,{ "Content-Type":"Text/plain"});
        res.write("Hello world");
        res.end();
    })
    .listen(3000);