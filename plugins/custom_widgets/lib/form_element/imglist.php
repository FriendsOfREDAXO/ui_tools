<?php

/**
 * @package redaxo\mediapool
 */
class rex_form_widget_imglist_element extends rex_form_element
{
    private $args = [];

    // 1. Parameter nicht genutzt, muss aber hier stehen,
    // wg einheitlicher Konstrukturparameter
    public function __construct($tag = '', rex_form $table = null, array $attributes = [])
    {
        parent::__construct('', $table, $attributes);
    }

    public function setCategoryId($category_id)
    {
        $this->args['category'] = $category_id;
    }

    public function setTypes($types)
    {
        $this->args['types'] = $types;
    }

    public function setTooltip($tooltip = true)
    {
        $this->args['tooltip'] = $tooltip;
    }

    public function formatElement()
    {
        static $widget_counter = 1;

        $html = rex_var_imglist::getWidget($widget_counter, $this->getAttribute('name'), $this->getValue(), $this->args);

        ++$widget_counter;
        return $html;
    }
}

/**
 * $field = imglist::addImglistField($rex_form, 'media');
 * $field->setLabel('Image');
 * $field->setTooltip(true);
 */
class imglist
{
    /**
     * @param rex_form $form
     * @param $name
     * @param null $value
     * @param array $attributes
     * @return rex_form_element
     * @throws rex_exception
     * @author Joachim Doerr
     */
    public static function addImglistField(rex_form $form, $name, $value = null, array $attributes = [])
    {
        if (!rex_addon::get('mediapool')->isAvailable()) {
            throw new rex_exception(__METHOD__ . '() needs "mediapool" addon!');
        }
        $attributes['internal::fieldClass'] = 'rex_form_widget_imglist_element';
        $field = $form->addField('', $name, $value, $attributes, true);
        return $field;
    }
}