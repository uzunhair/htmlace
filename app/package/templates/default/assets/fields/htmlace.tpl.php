<?php if ($field->title) { ?><label for="<?php echo $field->id; ?>"><?php echo $field->title; ?></label><?php } ?>
<?php echo html_textarea($field->element_name, $value, array('rows'=>$field->getOption('size'),
    'id'=>$field->id, 'class'=>'html-ace-field-'. $field->id,
    'required'=>(array_search(array('required'), $field->getRules()) !== false))); ?>


<pre id="editor"></pre>

<div class="scrollmargin"></div>

<!-- load emmet code and snippets compiled for browser -->
<?php $this->addJSFromContext('templates/default/js/fields/htmlace/emmet.js'); ?>
<!-- load ace -->
<?php $this->addJSFromContext('templates/default/js/fields/htmlace/ace.js'); ?>
<!-- load ace emmet extension -->
<?php $this->addJSFromContext('templates/default/js/fields/htmlace/ext-emmet.js'); ?>

<script>
    var editor = ace.edit("editor");
    editor.session.setMode("ace/mode/html");
    // enable emmet on the current editor
    <?php if($field->getOption('html_ace_theme')){ ?>
        editor.setTheme("ace/theme/<?php echo $field->getOption('html_ace_theme'); ?>");
    <?php } ?>
    editor.setOption("enableEmmet", true);
    editor.getSession().setUseWrapMode(true); // включаем text wrapping
    editor.setShowPrintMargin(false);

    var textarea = $('textarea.html-ace-field-<?php echo $field->id; ?>').hide();

    editor.getSession().setValue(textarea.val());
    editor.getSession().on('change', function(){
        textarea.val(editor.getSession().getValue());
    });

    editor.getSession().on("changeAnnotation", function() {
        var annotations = editor.getSession().getAnnotations()||[], i = len = annotations.length;
        while (i--) {
            if(/doctype first\. Expected/.test(annotations[i].text)) {
                annotations.splice(i, 1);
            }
        }
        if(len>annotations.length) {
            editor.getSession().setAnnotations(annotations);
        }
    });

    //editor.setAutoScrollEditorIntoView(true);
<?php if($field->getOption('html_ace_min_line')){ ?>
    editor.setOption("minLines", <?php echo $field->getOption('html_ace_min_line'); ?>);
<?php } ?>
<?php if($field->getOption('html_ace_max_line')){ ?>
    editor.setOption("maxLines", <?php echo $field->getOption('html_ace_max_line'); ?>);
<?php } ?>
</script>

<style>
    #editor {
        height: 300px;
    }
</style>