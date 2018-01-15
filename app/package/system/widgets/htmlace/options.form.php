<?php

class formWidgetHtmlaceOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'title' => LANG_OPTIONS, 
                'childs' => array(

                    new fieldHtmlace('options:content', array(
                        'title' => LANG_WD_HTMLACE_CONTENT,
                        'rules' => array(
                            array('required')
                        )
                    )),

                )
            ),

        );

    }

}
