let img_list = '.rex-js-widget-imglist';

$(document).on('rex:ready', function (e, container) {

    if (container.find(img_list).length) {
        container.find(img_list).each(function(){
            imglist_init_widget($(this));
            imglist_list_items_action($(this));
            imglist_widget_actions($(this));
        });
    }
});

function imglist_init_widget(element) {
    let widget_id = element.attr('data-widget-id');

    element.find('ul.thumbnail-list').sortable({
        opacity: 0.6,
        cursor: 'move',
        placeholder: "li-placeholder",
        stop: function () {
            // refresh input
            imglist_write_input(widget_id, 'REX_MEDIALIST_', 'REX_IMGLIST_');
        }
    });
}

function writeREXMedialist(id){
    let letitgo = true,
        element;

    $(img_list).each(function() {
        // if the the widget id a imglist?
        if ($(this).attr('data-widget-id') == id) {
            // yes don't let it go ;)
            letitgo = false;
            // and selt element for the next steps
            element = $(this);
        }
    });

    if (letitgo) {
        // default widget action for input write
        writeREX(id, 'REX_MEDIALIST_', 'REX_MEDIALIST_SELECT_');
    } else {
        // add li by write event from list
        imglist_add_img_by_last_list_item(element);
    }
    return false;
}

function imglist_widget_actions(element) {
    let widget_id = element.attr('data-widget-id'),
        param = element.attr('data-params');

    // REMOVE BUTTON
    element.find('.btn-popup.delete').on('click', function() {
        let selected = element.find('ul.thumbnail-list > li.selected'),
            next_selected = selected.next(),
            prev_selected = selected.prev();

        if (selected.length) {
            // remove element
            selected.remove();
            element.find('select option:selected').remove();

            // set new selected item
            if (next_selected.length) {
                imglist_list_items_select(element, next_selected);
            } else if (prev_selected.length) {
                imglist_list_items_select(element, prev_selected);
            }

            // refresh input
            imglist_write_input(widget_id, 'REX_MEDIALIST_', 'REX_IMGLIST_');

            // refresh sortable
            element.find('ul.thumbnail-list').sortable('refresh');
        }
        return false;
    });

    // OPEN BUTTON
    element.find('.btn-popup.open').on('click', function() {
        openREXMedialist(widget_id, param);
        return false;
    });

    // ADD BUTTON
    element.find('.btn-popup.add').on('click', function() {
        addREXMedialist(widget_id, param);
        return false;
    });

    // VIEW BUTTON
    element.find('.btn-popup.view').on('click', function() {
        viewREXMedialist(widget_id, param);
        return false;
    });
}

function imglist_add_img_by_last_list_item(element) {
    let widget_id = element.attr('data-widget-id'),
        last_option = element.find('select option:last'),
        last_img = last_option.val(),
        last_key = element.find('select option').length;

    // set key for mapping between option and li element
    last_option.attr('data-key', last_key);

    // add li img element
    element.find('ul.thumbnail-list').append('<li data-key="' + last_key + '" value="' + last_img + '" data-value="' + last_img + '"><img class="thumbnail" src="index.php?rex_media_type=rex_medialistbutton_preview&rex_media_file=' + last_img + '" /></li>');

    // refresh input
    imglist_write_input(widget_id, 'REX_MEDIALIST_', 'REX_IMGLIST_');

    // refresh sortable
    element.find('ul.thumbnail-list').sortable('refresh');
}

function imglist_list_items_action(element) {
    element.find('ul.thumbnail-list').on('click', 'li', function() {
        let selected = ($(this).attr('data-selected') == 1);
        $(this).parent().find('li').removeClass('selected').attr('data-selected', 0);
        element.find('select option:selected').prop('selected', false);

        if (!selected) {
            imglist_list_items_select(element, $(this));
        }
    });
}

function imglist_list_items_select(element, item) {
    item.addClass('selected').attr('data-selected', 1);
    element.find('select option').each(function(){
        if ($(this).attr('data-key') === item.attr('data-key')) {
            $(this).prop('selected', true);
        }
    });
}

function imglist_write_input(id, i_list, i_select) {
    let source_elements = $('#' + i_select + id + ' li'),
        new_value = '';

    for (let i=0; i < source_elements.length; i++) {
        new_value = new_value + $(source_elements[i]).attr('value');
        if (source_elements.length > (i+1))  new_value = new_value + ',';
    }

    $('#' + i_list + id).val(new_value);
}
