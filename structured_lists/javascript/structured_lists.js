$(document).ready(function() {
    $('head').append('<style>.structured_lists{text-align:center;margin-top:8px;max-width:300px;}</style>');
    structured_lists_render();
});

$('.structured_lists').click(function() {
    $(this).select();
});

$(document).on('change','input[name="title"]',function(e) { 
    structured_lists_render();
});

$(document).on('change','input[name="url_title"]',function(e) { 
    structured_lists_render();
});

$(document).on('keyup','input[name="title"]',function(e) { 
    structured_lists_render();
});

$(document).on('keyup','input[name="url_title"]',function(e) { 
    structured_lists_render();
});

function structured_lists_render() {
    setTimeout(function() {
        var urlTitle = $('input[name="url_title"]').val();
        $('.structured_lists').val('[structured-list-' + urlTitle + ']');
    }, 50);
}