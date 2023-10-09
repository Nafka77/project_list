$(document).ready(function() {
    $('#search').keyup(function() {
        var searchText = $(this).val().toLowerCase();

        $.ajax({
            url: 'window.location.pathname',
            method: 'GET',
            dataType: 'html',

            success: function(data) {
                $('.block section').each(function() {
                    var articleText = $(this).find('h2, h1').text().toLowerCase();
                    var parentSection = $(this);

                    if (articleText.indexOf(searchText) === -1) {
                        parentSection.hide();
                    } else {
                        parentSection.show();
                    }
                });
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    });
});