<?php

//echo rex_view::title(rex_i18n::msg('bootstrap-datetimepicker_menu_entry'));

$body = '
@ToDO<br><br>
<p>
    .datetimepicker auf einem Input fügt einen Date und Time Picker hinzu.
</p>
<p>
    .datepicker auf einem Input fügt einen Date Picker hinzu.
</p>
<p>
    .timepicker auf einem Input fügt einen Time Picker hinzu.
</p>
';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::rawMsg('bootstrap-datetimepicker_config_title'), false);
$fragment->setVar('body', $body, false);
$title = $fragment->parse('core/page/section.php');

echo $title;