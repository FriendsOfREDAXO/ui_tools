<?php

if(rex::isBackend()) {
    rex_view::addCssFile($this->getAssetsUrl('jquery-minicolors/jquery.minicolors.css'));
    rex_view::addJsFile($this->getAssetsUrl('jquery-minicolors/jquery.minicolors.min.js'));
    rex_view::addJsFile($this->getAssetsUrl('jquery-minicolors/jquery-minicolors.js'));
    rex_view::addJsFile($this->getAssetsUrl('jquery-minicolors/jquery-minicolors-for-customizer.js'));
}