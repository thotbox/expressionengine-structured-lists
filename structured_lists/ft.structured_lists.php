<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class structured_lists_ft extends EE_Fieldtype {

    var $info = array(
        'name' => 'Thotbox: Structured Lists',
        'author' =>'Shane Woodward',
        'description' => 'Grid Based Foundation Tabs and Accordian Relationships via Wygwam',
        'version' =>'1.0'
    );

    public function display_field($data) {
        if (ee()->session->cache(__CLASS__, __FUNCTION__) === FALSE) {
            ee()->cp->load_package_js('structured_lists');
            ee()->session->set_cache(__CLASS__, __FUNCTION__, TRUE);
        }
        $input_properties = array('class' => 'structured_lists', 'readonly' => 'true' );
        return form_input( $input_properties );
    }
    
    public function grid_display_settings($data) {
        return NULL;
    }

    public function accepts_content_type($name) {
        return ($name == 'grid');
    }

    public function grid_display_field($data) {
        if (ee()->session->cache(__CLASS__, __FUNCTION__) === FALSE) {
            ee()->cp->load_package_js('structured_lists');
            ee()->session->set_cache(__CLASS__, __FUNCTION__, TRUE);
        }
        $input_properties = array('class' => 'structured_lists', 'readonly' => 'true' );
        return form_input( $input_properties );
    }
}