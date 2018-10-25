<?php

$this->setProperty('author', 'Friends Of REDAXO');

if (rex::isBackend() && rex::getUser()) {
    rex_perm::register('ui_tools[]');
    rex_view::addCssFile($this->getAssetsUrl('css/styles.css'));
}

