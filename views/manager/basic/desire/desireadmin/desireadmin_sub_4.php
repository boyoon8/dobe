<div class="box mb20">
    <div class="box-table">
        <?php
        echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
        echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_type" value="other_sub_1" />
            
            
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    회사목표 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">년도  </div>
                    <div class="col-sm-3">항목</div>
                    <div class="col-sm-2">Team</div>
                    <div class="col-sm-2">목표</div>
                    <div class="col-sm-2">실적</div>
                    
                    
                </div>
             
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

            <div class=" col-sm-6">
                <div class="media-heading" >
                    회사목표 업데이트 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    <div class="col-sm-1">Action</div>
                    
                </div>
             
                    <?php
                    if (element('list', element('data', $view))) {
                        foreach (element('list', element('data', $view)) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" />
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-1"><input type="number" class="form-control text-right" name="ota_value[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_value', $result); ?>" /></div>
                            <div class="col-sm-1"><a href="javascript:post_action('post_extra', '<?php echo element('post_id', $result);?>', '<?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'disable':'enable';?>');" class="btn <?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'btn-success':'btn-danger';?> btn-xs"><?php echo element('popstate', element('extravars', $result));?></a></div>
                            
                            
                        </div>
                    <?php
                        }
                    }
                    ?>
                
                </div>
            </div>
            <div class="box-table-header">
                
                <div class="btn-group pull-right col-sm-2" role="group" aria-label="...">
                        <button type="submit" class="btn btn-outline btn-danger btn-sm">Upload</button>
                    </div>
                <div class=" pull-right col-sm-10">
                    <label for="post_file[0]" class="col-sm-3 control-label">회사목표 업로드</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="post_file[0]" id="post_file[0]">
                    </div>
                    
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>


<div class="box mb20">
    <div class="box-table">
        <?php
        echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
        echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_type" value="other_sub_1" />
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    APEX 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    
                    
                </div>
             
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
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    APEX 업데이트 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    <div class="col-sm-1">Action</div>
                    
                </div>
             
                    <?php
                    if (element('list', element('data', $view))) {
                        foreach (element('list', element('data', $view)) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" />
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-1"><input type="number" class="form-control text-right" name="ota_value[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_value', $result); ?>" /></div>
                            <div class="col-sm-1"><a href="javascript:post_action('post_extra', '<?php echo element('post_id', $result);?>', '<?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'disable':'enable';?>');" class="btn <?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'btn-success':'btn-danger';?> btn-xs"><?php echo element('popstate', element('extravars', $result));?></a></div>
                            
                        </div>
                    <?php
                        }
                    }
                    ?>
                
                </div>
            </div>
            <div class="box-table-header">
                
                <div class="btn-group pull-right col-sm-2" role="group" aria-label="...">
                        <button type="submit" class="btn btn-outline btn-danger btn-sm">Upload</button>
                    </div>
                <div class=" pull-right col-sm-10">
                    <label for="post_file[0]" class="col-sm-3 control-label">APEX 업로드</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="post_file[0]" id="post_file[0]">
                    </div>
                    
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>

<div class="box mb20">
    <div class="box-table">
        <?php
        echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
        echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_type" value="other_sub_1" />
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    매출목표 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    
                    
                </div>
             
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
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    매출목표 업데이트 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    <div class="col-sm-1">Action</div>
                    
                </div>
             
                    <?php
                    if (element('list', element('data', $view))) {
                        foreach (element('list', element('data', $view)) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" />
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-1"><input type="number" class="form-control text-right" name="ota_value[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_value', $result); ?>" /></div>
                            <div class="col-sm-1"><a href="javascript:post_action('post_extra', '<?php echo element('post_id', $result);?>', '<?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'disable':'enable';?>');" class="btn <?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'btn-success':'btn-danger';?> btn-xs"><?php echo element('popstate', element('extravars', $result));?></a></div>
                            
                        </div>
                    <?php
                        }
                    }
                    ?>
                
                </div>
            </div>
            <div class="box-table-header">
                
                <div class="btn-group pull-right col-sm-2" role="group" aria-label="...">
                        <button type="submit" class="btn btn-outline btn-danger btn-sm">Upload</button>
                    </div>
                <div class=" pull-right col-sm-10">
                    <label for="post_file[0]" class="col-sm-3 control-label">매출목표 업로드</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="post_file[0]" id="post_file[0]">
                    </div>
                    
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>


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
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    수금목표 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    
                    
                </div>
             
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
            
            <div class=" col-sm-6">
                <div class="media-heading" >
                    수금목표 업데이트 목록
                </div>
               <div class="list-group ">

                <div class="form-group list-group-item">
                    <div class="col-sm-3">Date </div>
                    <div class="col-sm-8">File Name</div>
                    <div class="col-sm-1">Status</div>
                    <div class="col-sm-1">Action</div>
                    
                </div>
             
                    <?php
                    if (element('list', element('data', $view))) {
                        foreach (element('list', element('data', $view)) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" />
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-1"><input type="number" class="form-control text-right" name="ota_value[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_value', $result); ?>" /></div>
                            <div class="col-sm-1"><a href="javascript:post_action('post_extra', '<?php echo element('post_id', $result);?>', '<?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'disable':'enable';?>');" class="btn <?php echo element('popstate', element('extravars', $result)) ==='enable' ? 'btn-success':'btn-danger';?> btn-xs"><?php echo element('popstate', element('extravars', $result));?></a></div>
                            
                        </div>
                    <?php
                        }
                    }
                    ?>
                
                </div>
            </div>
            <div class="box-table-header">
                
                <div class="btn-group pull-right col-sm-2" role="group" aria-label="...">
                        <button type="submit" class="btn btn-outline btn-danger btn-sm">Upload</button>
                    </div>
                <div class=" pull-right col-sm-10">
                    <label for="post_file[0]" class="col-sm-3 control-label">수금목표 업로드</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="post_file[0]" id="post_file[0]">
                    </div>
                    
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript">
//<![CDATA[


//]]>
</script>
