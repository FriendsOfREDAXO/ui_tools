<?php

//echo rex_view::title(rex_i18n::msg('jquery-minicolors_menu_entry'));

$file = rex_file::get(rex_path::addon('ui_tools/plugins/jquery-minicolors/assets/jquery-minicolors','README.md'));
$Parsedown = new Parsedown();
$content =  '<div id="ui_tools">'.$Parsedown->text($file);


$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::msg('jquery-minicolors_readme'));
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');