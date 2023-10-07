const { log } = require('console');
const http = require('http');

const server = http.createServer((req, res) => {
    res.write('Welcome to Node JS');
    res.end();
})

server.listen(3000, () => {
    console.log('Server is running on port 3000');
    console.log('http://localhost:3000');
});