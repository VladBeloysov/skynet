jQuery('document').ready(function(){
    jQuery('.historyAPI').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        getContent(href, true);
        // jQuery('.historyAPI').removeClass('active');
        // $(this).addClass('active');
    });

});

// Adding popstate event listener to handle browser back button
window.addEventListener("popstate", function(e) {
    // Get State value using e.state
    getContent(location.pathname, false);
});

function getContent(url, addEntry) {
    $.get(url)
    .done(function( data ) {
        // Updating Content on Page
        $('#contentHolder').html(data);
        if(addEntry == true) {
            // Add History Entry using pushState
            history.pushState(null, null, url);
        }

    });
}
