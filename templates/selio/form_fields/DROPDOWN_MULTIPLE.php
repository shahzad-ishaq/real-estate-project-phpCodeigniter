<?php
    $col=3;
    $f_id = $field->id;
    $placeholder = _ch(${'options_name_'.$f_id});
    $direction = $field->direction;
    if($direction == 'NONE'){
        $col=3;
        $direction = '';
    }
    else
    {
        $placeholder = lang_check($direction);
        $direction=strtolower('_'.$direction);
    }
    
    
    $f_id = $field->id;
    $class_add = $field->class;
    $values_arr = ${'options_values_arr_'.$f_id};
    
    if(function_exists('sw_filter_search_slidetoggle')) 
    sw_filter_search_slidetoggle();
?>

<div class="form_field <?php echo _ch($class_add);?> field_search_<?php echo _ch($f_id); ?>">
    <div class="form-group">
        <?php echo (form_multiselect('search_'.$f_id, $values_arr, search_value($f_id.$direction), 'class="form-control selectpicker" title="'.$placeholder.'"'));?>
    </div>
</div>