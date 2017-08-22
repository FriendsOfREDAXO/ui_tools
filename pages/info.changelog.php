<?php

$file = rex_file::get(rex_path::addon('be_utilites','CHANGELOG.md'));
$Parsedown = new Parsedown();

$content =  '<div id="be_utilites">'.$Parsedown->text($file).'</div>';

$fragment = new rex_fragment();
$fragment->setVar('title', 'Changelog');
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');


