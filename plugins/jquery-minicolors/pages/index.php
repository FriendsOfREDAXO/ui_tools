<?php

//echo rex_view::title(rex_i18n::msg('jquery-minicolors_menu_entry'));

$body = '
@ToDO<br><br>
<p>
    .minicolors auf einem Input fügt einen Color Picker hinzu.
</p>
';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::rawMsg('jquery-minicolors_config_title'), false);
$fragment->setVar('body', $body, false);
$title = $fragment->parse('core/page/section.php');

echo $title;