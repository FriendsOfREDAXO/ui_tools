<?php

if(rex::isBackend()) {
    rex_view::addCssFile($this->getAssetsUrl('selectize/dist/css/selectize.css'));
    rex_view::addCssFile($this->getAssetsUrl('selectize/dist/css/selectize.bootstrap3.css'));
    rex_view::addJsFile($this->getAssetsUrl('selectize/dist/js/standalone/selectize.min.js'));
    rex_view::addJsFile($this->getAssetsUrl('rex_selectize.js'));
}