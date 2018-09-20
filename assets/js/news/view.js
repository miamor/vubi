$(document).ready(function() {
    var textarea = document.getElementById('news-content-textarea');
    sceditor.create(textarea, {
        format: 'bbcode',
        style: 'minified/themes/content/default.min.css'
    });
    var instance = sceditor.instance(textarea);
    var htmlFragment = instance.fromBBCode(instance.val(), true);
    $('.news-content').html(htmlFragment);
    

    var h_textarea = document.getElementById('news-highlight_content-textarea');
    sceditor.create(h_textarea, {
        format: 'bbcode',
        style: 'minified/themes/content/default.min.css'
    });
    var h_instance = sceditor.instance(h_textarea);
    var h_htmlFragment = h_instance.fromBBCode(h_instance.val(), true);
    $('.news-highlight_content').html(h_htmlFragment);

    $('.sceditor-container').remove();
});

