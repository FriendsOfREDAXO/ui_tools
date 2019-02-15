$(document).on('rex:ready', function() {
    customizer_settings = {
        animationSpeed: 50,
        animationEasing: 'swing',
        change: null,
        changeDelay: 0,
        control: 'hue',
        defaultValue: '',
        format: 'hex',
        hide: null,
        hideSpeed: 100,
        inline: false,
        keywords: '',
        letterCase: 'lowercase',
        opacity: false,
        position: 'bottom left',
        show: null,
        showSpeed: 100,
        theme: 'bootstrap',
        swatches: []
        };

    $('input#customizer-labelcolor').minicolors(customizer_settings);
});
