<?php

//echo rex_view::title(rex_i18n::msg('bootstrap-datetimepicker_menu_entry'));

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::rawMsg('bootstrap-datetimepicker_config_title'), false);
$fragment->setVar('body', '@ToDo', false);
$title = $fragment->parse('core/page/section.php');

echo $title;