$(document).ready(function() {
    $('.home-about-item').each(function () {
        $this = $(this);

        var textarea = document.getElementById($this.find('textarea').attr('id'));
        sceditor.create(textarea, {
            format: 'bbcode',
            style: 'minified/themes/content/default.min.css'
        });
        var instance = sceditor.instance(textarea);
        var htmlFragment = instance.fromBBCode(instance.val(), true);
        console.log(textarea);
        console.log(htmlFragment);
        $this.find('p').html(htmlFragment);
        $('.sceditor-container').remove();
    });
});

