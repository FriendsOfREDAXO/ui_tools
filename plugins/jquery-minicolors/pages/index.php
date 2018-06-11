<?php

//echo rex_view::title(rex_i18n::msg('jquery-minicolors_menu_entry'));

$curDir = rex_path::plugin('ui_tools', 'jquery-minicolors');

$error = [];
$config = [];
$info = '';
$success = '';

if (rex_post('btn_save', 'string') != '') {
    // set config

    $tempConfig = [];
    $newConfig = [];

    $newConfig = rex_post('settings', 'array');

    $tempConfig['for-customizer'] = 0;
    if (isset($newConfig['for-customizer']) && $newConfig['for-customizer'] == 1) {
        $tempConfig['for-customizer'] = 1;
    }


    // save config

    if (empty($error) && rex_plugin::get('ui_tools', 'jquery-minicolors')->setConfig($tempConfig)) {
        $success = rex_i18n::msg('jquery-minicolors_config_updated');
    } else {
        $error[] = rex_i18n::msg('jquery-minicolors_config_update_failed');
    }
}

// load config

$config = rex_plugin::get('ui_tools', 'jquery-minicolors')->getConfig();


// messages

if (!empty($error)) {
    echo rex_view::error(implode('<br />', $error));
}

if ($info != '') {
    echo rex_view::info($info);
}

if ($success != '') {
    echo rex_view::success($success);
}

// output

$content = '';

// form - Funktionen

$content .= '<fieldset><legend>' . rex_i18n::msg('jquery-minicolors_features') . '</legend>';

$formElements = [];

$n = [];
$n['label'] = '<label for="jquery-minicolors-for-customizer">' . rex_i18n::msg('jquery-minicolors_for-customizer_check') . '</label>';
$n['field'] = '<input type="checkbox" id="jquery-minicolors-for-customizer" name="settings[for-customizer]" value="1" ' . ($config['for-customizer'] ? 'checked="checked" ' : '') . '/>';
$formElements[] = $n;


$n = [];
$n['label'] = '';
$n['field'] = '<p>' . rex_i18n::msg('jquery-minicolors_for-customizer_info') . '</p>';
$formElements[] = $n;

$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$content .= $fragment->parse('core/form/form.php');

$content .= '</fieldset>';

// form - Button

$formElements = [];

$n = [];
$n['field'] = '<button class="btn btn-save rex-form-aligned" type="submit" name="btn_save" value="' . rex_i18n::msg('jquery-minicolors_update') . '">' . rex_i18n::msg('jquery-minicolors_update') . '</button>';
$formElements[] = $n;

$fragment = new rex_fragment();
$fragment->setVar('flush', true);
$fragment->setVar('elements', $formElements, false);
$buttons = $fragment->parse('core/form/submit.php');

// section
$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', rex_i18n::msg('jquery-minicolors_menu_entry'), false);
$fragment->setVar('body', $content, false);
$fragment->setVar('buttons', $buttons, false);
$content = $fragment->parse('core/page/section.php');

echo '
    <form action="' . rex_url::currentBackendPage() . '" method="post">
        ' . $content . '
    </form>
';


$body = '
@ToDO<br><br>
<p>
    .minicolors auf einem Input fügt einen Color Picker hinzu. In YForm ein Text-Eingabefeld wählen und über JSON-Attribute die Klassen <code>{"class":"minicolors form-control"}</code> mitgeben.
</p>
';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::rawMsg('jquery-minicolors_config_title'), false);
$fragment->setVar('body', $body, false);
$title = $fragment->parse('core/page/section.php');

echo $title;
