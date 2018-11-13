const express = require('express');
const app = express();
const fs = require('fs');

const formidable = require('formidable');

/* TODO */
// Sei admin oppure user?
// Solo file Jpeg
// Caricamento per Album


app.use(express.static(__dirname + '/client'));


app.get('/immagini', function(req, res) {

    fs.readFile("mood.json", (error, data) => {
        if (error)
            res.send("Errore imprevisto")

        var json = JSON.parse(data);
        res.json(json)
    })
});

app.get('/admin', function(req, res) {

    res.sendFile((__dirname + '/client/admin.html'))

})

app.get('/login', function(req, res) {

    res.sendFile((__dirname + '/client/login.html'))

})

app.post('/upload', (req, res) => {

    var form = new formidable.IncomingForm();

    form.parse(req);

    form.on('fileBegin', function(name, file) {
        file.path = __dirname + '/imgsUpload/' + file.name;

        fs.readFile('imgs.json', function(err, data) {
            var content = JSON.parse(data)
            for (i in content.albums.photos.path) {
                console.log(content.albums.photos.path[i])
            }
            // var json = JSON.parse(content)
            //json.push(file.path)

            //fs.writeFile("imgs.json", JSON.stringify(json))
        })
    });

    form.on('file', function(name, file) {
        console.log('Uploaded ' + file.name);
    });

});

app.listen(8080, function() {
    console.log('Server su porta 8080!');
});