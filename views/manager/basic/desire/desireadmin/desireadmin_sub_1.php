<div class="box">
    <div class="box-table">
        <?php
        echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
        echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_type" value="other_sub_1" />
            <div class="box-table-header">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-1">시간설정(분)</div>
                    
                    
                </div>
                <div id="sortable">
                    <?php
                    if (element('list', element('data', $view))) {
                        foreach (element('list', element('data', $view)) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" />
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-1"><input type="number" class="form-control text-right" name="ota_value[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_value', $result); ?>" /></div>
                            
                            
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            
        <?php echo form_close(); ?>
    </div>
</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript">
//<![CDATA[

$(function () {
    $('#sortable').sortable({
        handle:'.fa-arrows'
    });
})
//]]>
</script>
