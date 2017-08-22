<?php

$file = rex_file::get(rex_path::addon('be_utilites','README.md'));
$Parsedown = new Parsedown();
$content =  '<div id="be_utilites">'.$Parsedown->text($file);


$fragment = new rex_fragment();
$fragment->setVar('title', 'Info');
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');
