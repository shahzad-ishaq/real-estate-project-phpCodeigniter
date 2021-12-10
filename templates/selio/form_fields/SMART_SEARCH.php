<?php
    $sel_values = array(0,50,100,200,500);
    $suffix = lang_check('km');
    $curr_value=NULL;
    
    if(isset($_GET['search']))$search_json = json_decode($_GET['search']);
    if(isset($search_json->v_search_radius))
    {
        $curr_value=$search_json->v_search_radius;
    }
            
    
    $search_query = '';
    if(isset($search_json->v_search_option_smart))
    {
        $search_query=$search_json->v_search_option_smart;
    }
    $class_add = $field->class;
    
    if(function_exists('sw_filter_search_slidetoggle')) 
    sw_filter_search_slidetoggle();
?>

<div class="form_field <?php echo _ch($class_add, ''); ?>">
    <div class="form-group field_search_<?php echo _ch($f_id); ?>" style="<?php echo _ch($field->style, ''); ?>">
        <input id="search_option_smart" name="search_option_smart" value="<?php echo _ch($search_query,''); ?>" type="text" class="form-control" placeholder="<?php echo lang_check('What?');?>" />
    </div>
</div>
