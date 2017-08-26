<?php

if(rex::isBackend()) {
    rex_view::addCssFile($this->getAssetsUrl('bootstrap-datetimepicker/css/bootstrap-datetimepicker.css'));
    rex_view::addJsFile($this->getAssetsUrl('bootstrap-datetimepicker/js/moment-with-locales.js'));
    rex_view::addJsFile($this->getAssetsUrl('bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'));
    rex_view::addJsFile($this->getAssetsUrl('bootstrap-datetimepicker/bootstrap-datetimepicker.js'));
}