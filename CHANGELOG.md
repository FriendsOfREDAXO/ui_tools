### UI Tools

#### 14.03.2019 - v1.0.0
imglist entfernt, wird in mform fortgeführt

#### 17.12.2018 - v0.4.1

- minicolors for customizer fixed
- img imgListWidget support for selectMediaListArray('selectedmedia[]') added
- added imgListWidget helper class for rex_form element
    ```
    $field = imglist::addImglistField($rex_form, 'media');
    $field->setLabel('Image');
    $field->setTooltip(true);
    ```

#### 17.12.2018 - v0.4.0

- add imgListWidget

#### 25.10.2018 - v0.3.0 
 
- scss compiling caused performance problems, so deleted @skerbis
- includeCurrentPageSubPath @christophboecker 

#### 29.09.2017 - v0.2.5 Add help files
 
- add general, datetimepicker, minicolors, selectize help files

#### 28.09.2017 - v0.2.4 Add jquery-minicolors support for System Customizer Color Field
 
- standard is on, set to color format `hex` for backwards compatibility - fixes #2

#### 27.08.2017 - v0.2.3 Make Plugin jquery-minicolors functional
 
- added classes .minicolors for direct usage in modules

#### 27.08.2017 - v0.2.2 Make Plugin selectize functional
 
- added classes .selectize for direct usage in modules

#### 26.08.2017 - v0.2.1 Make Plugin bootstrap-datetimepicker functional
 
- added classes .datetimepicker, .datepicker, .timepicker for direct usage in modules

#### 25.08.2017 - v0.2.0 Plugin bootstrap-datetimepicker added

- added vendor plugin bootstrap-datetimepicker

#### 25.08.2017 - v0.1.5 Refactoring

- refactored repository from be_utilities to ui_tools

#### 22.08.2017 - v0.1.0 Initial commit

