$(document).ready(function () {

    // Handlebars refs
	var source = $('#albums-template').html();
    var template = Handlebars.compile(source);
    
    // jQuery refs
    var playground = $('.app__show-albums');
    var input = $('.app__navmenu__filter input');
    var button = $('.app__navmenu__filter button');

    // Data refs
    var dataSource = 'dist/scripts/ajax.php';

    loaderData(dataSource, 'GET', playground, template);
    
    button.click( function() {

    })

}); //END of DOC READY

function getData (source, type = 'POST'){
    var result =
        $.ajax({
            type: type,
            url: source,
            data : 'Foo Fighters',
            success: function(response) {
                console.log('DB queried, it was ticklish');
                console.table(response);
            },
            error: function() {
                var err = 'DB was uncooperative, kill him';
                console.log(err);
            }
        });
        return result.promise();
}

function printAlbums(response, template, destination, index){
    var thisAlbum = response[index];
    var templateData = {
        albumTitle: thisAlbum['title'],
        albumAuthor: thisAlbum['author'],
        albumGenre: thisAlbum['genre'],
        albumYear: thisAlbum['year'],
        albumCover: thisAlbum['cover_path']
    };
    var output = template(templateData);
    destination.append(output);
}

function loaderData(source, type = 'GET', destination, template) {
    Promise.all([
        getData(source, type),
    ]).then(result => {
        for (var i = 0; i < result[0].length; i++){
            printAlbums(result[0], template, destination, i);
        }
    })
}