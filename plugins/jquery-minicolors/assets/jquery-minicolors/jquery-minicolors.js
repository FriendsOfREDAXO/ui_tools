$(document).on('rex:ready', function() {
    settings = {
        animationSpeed: 50,
        animationEasing: 'swing',
        change: null,
        changeDelay: 0,
        control: 'hue',
        defaultValue: '',
        format: 'rgb',
        hide: null,
        hideSpeed: 100,
        inline: false,
        keywords: '',
        letterCase: 'lowercase',
        opacity: true,
        position: 'bottom left',
        show: null,
        showSpeed: 100,
        theme: 'bootstrap',
        swatches: []
    };

    $('input.minicolors').minicolors(settings);
});
