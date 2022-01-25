<?php
$plugin = rex_plugin::get('ui_tools', 'bootstrap-datetimepicker');
if(rex::isBackend()) {
    rex_view::addCssFile($plugin->getAssetsUrl('bootstrap-datetimepicker/css/bootstrap-datetimepicker.css'));
    rex_view::addJsFile($plugin->getAssetsUrl('bootstrap-datetimepicker/js/moment-with-locales.js'));
    rex_view::addJsFile($plugin->getAssetsUrl('bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'));
    rex_view::addJsFile($plugin->getAssetsUrl('bootstrap-datetimepicker/rex_bootstrap-datetimepicker.js'));
}

if (rex_plugin::get('yform', 'manager')->isAvailable()) {
    rex_yform::addTemplatePath($plugin->getPath('ytemplates'));
}