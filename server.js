const php = require('node-php-server');

const server = php.createServer((req, res) =>  {
    res.sendFile(req.url);
});

server.listen(8000);