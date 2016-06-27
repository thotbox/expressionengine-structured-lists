<?php

$plugin_info = array(
    'pi_name' => 'Thotbox: Structured Lists',
    'pi_author' =>'Shane Woodward',
    'pi_description' => 'Grid Based Foundation Tabs and Accordian Relationships via Wygwam',
    'pi_version' =>'1.0',
    'pi_usage' => structured_lists::usage()
);

class structured_lists {

    public function __construct() {
        $this->return_data = $this->output();
    }

    public function output() {
        $this->EE =& get_instance();
        $data = $this->EE->TMPL->tagdata;
        $data = preg_replace('/<p>\[structured-list-(.*?)\]<\/p>/', '<div class="structured_list" data-url="$1"></div>', $data);
        $data = preg_replace('/\[structured-list-(.*?)\]/', '<div class="structured_list" data-url="$1"></div>', $data);
        return $data;
    }

    public static function usage() {
        ob_start();
    ?>
        Use {exp:structured_lists} ... {/exp:structured_lists} around your editor output to replace list shortcodes with list containers.
    <?php
        $text = ob_get_contents();
        ob_end_clean();
        return $text;
    }

}

?>