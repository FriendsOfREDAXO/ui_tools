<?php

//echo rex_view::title(rex_i18n::msg('selectize_menu_entry'));

$body = '
@ToDO<br><br>
<p>
    .selectize auf einem Input fügt eine Art Tag-Verhalten hinzu, die übergebenen Werte sind per Komma getrennt.
</p>
';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::rawMsg('selectize_config_title'), false);
$fragment->setVar('body', $body, false);
$title = $fragment->parse('core/page/section.php');

echo $title;