<?php

if(rex::isBackend()) {
    rex_view::addCssFile($this->getAssetsUrl('jquery-minicolor/jquery.minicolors.css'));
    rex_view::addJsFile($this->getAssetsUrl('jquery-minicolor/jquery.minicolors.min.js'));
}