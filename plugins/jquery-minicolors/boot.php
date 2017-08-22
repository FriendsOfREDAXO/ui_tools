<?php

if(rex::isBackend()) {
    rex_view::addCssFile($this->getAssetsUrl('jquery-minicolors/jquery.minicolors.css'));
    rex_view::addJsFile($this->getAssetsUrl('jquery-minicolors/jquery.minicolors.min.js'));
}