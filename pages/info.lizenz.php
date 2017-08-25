<?php
$file = rex_file::get(rex_path::addon('ui_tools','LICENSE.md'));
$Parsedown = new Parsedown();

$content =  '<div id="ui_tools">'.$Parsedown->text($file).'</div>';

$fragment = new rex_fragment();
$fragment->setVar('title', 'Lizenz');
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');
