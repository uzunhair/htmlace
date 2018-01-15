<?php

    class fieldHtmlace extends cmsFormField {
        public $title       = LANG_HTMLACE;
        public $sql         = 'mediumtext';
        public $filter_type = 'str';
        public $allow_index = false;
        public $var_type    = 'string';

        public function getOptions(){
            return array(
                new fieldList('html_ace_theme',array(
                    'title' => LANG_HTMLACE_THEME,
                    'items' => array(
                        false=> 'По умолчанию',
                        'chrome'=> 'Chrome',
                        'clouds'=> 'Clouds',
                        'crimson_editor'=> 'Crimson Editor',
                        'dawn'=> 'Dawn',
                        'dreamweaver'=> 'Dreamweaver',
                        'eclipse'=> 'Eclipse',
                        'github'=> 'GitHub',
                        'iplastic'=> 'IPlastic',
                        'solarized_light'=> 'Solarized Light',
                        'textmate'=> 'TextMate',
                        'tomorrow'=> 'Tomorrow',
                        'xcode'=> 'XCode',
                        'kuroir'=> 'Kuroir',
                        'katzenmilch'=> 'KatzenMilch',
                        'sqlserver'=> 'SQL Server',
                        'ambiance'=> 'Ambiance',
                        'chaos'=> 'Chaos',
                        'clouds_midnight'=> 'Clouds Midnight',
                        'cobalt'=> 'Cobalt',
                        'gruvbox'=> 'Gruvbox',
                        'gob'=> 'Green on Black',
                        'idle_fingers'=> 'idle Fingers',
                        'kr_theme'=> 'krTheme',
                        'merbivore'=> 'Merbivore',
                        'merbivore_soft'=> 'Merbivore Soft',
                        'mono_industrial'=> 'Mono Industrial',
                        'monokai'=> 'Monokai',
                        'pastel_on_dark'=> 'Pastel on dark',
                        'solarized_dark'=> 'Solarized Dark',
                        'terminal'=> 'Terminal',
                        'tomorrow_night'=> 'Tomorrow Night',
                        'tomorrow_night_blue'=> 'Tomorrow Night Blue',
                        'tomorrow_night_bright'=> 'Tomorrow Night Bright',
                        'tomorrow_night_eighties'=> 'Tomorrow Night 80s',
                        'twilight'=> 'Twilight',
                        'vibrant_ink'=> 'Vibrant Ink'
                    )
                )),
                new fieldList('html_ace_min_line',array(
                    'title'=> LANG_HTMLACE_THE_MIN_NUMBER_ROWS,
                    'items' => array(
                        '5'=> 5,
                        '10'=> 10,
                        '15'=> 15,
                        '20'=> 20,
                        '25'=> 25,
                    )
                )),
                new fieldList('html_ace_max_line',array(
                    'title'=> LANG_HTMLACE_THE_MAX_NUMBER_ROWS,
                    'items' => array(
                        '30'=> 30,
                        '40'=> 40,
                        '50'=> 50,
                        '60'=> 60,
                        '70'=> 70,
                        '80'=> 80,
                        '90'=> 90,
                        '100'=> 100
                    )
                ))
            );
        }

        public function parse($value) {
            return $value;
        }

    }