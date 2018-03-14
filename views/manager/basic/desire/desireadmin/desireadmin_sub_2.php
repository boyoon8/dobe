<?php
        echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
        echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
    ?>
<div class="col-sm-6">
    <div class="box mb20">
    <div class="box-table">
        <?php
    
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_a');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="a" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    활동 내역 
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_a">추가</button></div>
                </div>
                <div id="sortable_a">
                    <?php
                    if (element('a',element('list', element('data', $view)))) {
                        foreach (element('a',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_b');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="b" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    다음 회의 목적
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_b">추가</button></div>
                </div>
                <div id="sortable_b">
                    <?php
                    if (element('b',element('list', element('data', $view)))) {
                        foreach (element('b',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_c');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="c" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    CALL 유형
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_c">추가</button></div>
                </div>
                <div id="sortable_c">
                    <?php
                    if (element('c',element('list', element('data', $view)))) {
                        foreach (element('c',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_d');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="d" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    접촉 유형
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_d">추가</button></div>
                </div>
                <div id="sortable_d">
                    <?php
                    if (element('d',element('list', element('data', $view)))) {
                        foreach (element('d',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_e');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="e" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    할일 중요도 
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_e">추가</button></div>
                </div>
                <div id="sortable_e">
                    <?php
                    if (element('e',element('list', element('data', $view)))) {
                        foreach (element('e',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
</div>

<div class="col-sm-6">
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_f');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="f" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    클레임
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_f">추가</button></div>
                </div>
                <div id="sortable_f">
                    <?php
                    if (element('f',element('list', element('data', $view)))) {
                        foreach (element('f',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_g');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="g" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    욕구 사항
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_g">추가</button></div>
                </div>
                <div id="sortable_g">
                    <?php
                    if (element('g',element('list', element('data', $view)))) {
                        foreach (element('g',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_h');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="h" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    샘플 키워드
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_h">추가</button></div>
                </div>
                <div id="sortable_h">
                    <?php
                    if (element('h',element('list', element('data', $view)))) {
                        foreach (element('h',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_i');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="i" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    배송 방식
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_i">추가</button></div>
                </div>
                <div id="sortable_i">
                    <?php
                    if (element('i',element('list', element('data', $view)))) {
                        foreach (element('i',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
    <div class="box mb20">
    <div class="box-table">
        <?php 
        $attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist_j');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="s" value="1" />
            <input type="hidden" name="ota_value" value="j" />
            <input type="hidden" name="ota_type" value="other_sub_2" />
            <div class="box-table-header">
                <div class="pull-left media-heading" >
                    샘플 처리
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <button type="submit" class="btn btn-outline btn-danger btn-sm">저장하기</button>
                </div>
            </div>
            <div class="list-group">
                <div class="form-group list-group-item">
                    <div class="col-sm-2">순서변경</div>
                    <div class="col-sm-3">그룹명</div>
                    <div class="col-sm-4">설명</div>
                    <div class="col-sm-2">해당 건수</div>
                    <div class="col-sm-1"><button type="button" class="btn btn-outline btn-primary btn-xs btn-add-rows" data-id="sortable_j">추가</button></div>
                </div>
                <div id="sortable_j">
                    <?php
                    if (element('j',element('list', element('data', $view)))) {
                        foreach (element('j',element('list', element('data', $view))) as $result) {
                    ?>
                        <div class="form-group list-group-item">
                            <div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[<?php echo element('ota_id', $result); ?>]" value="<?php echo element('ota_id', $result); ?>" /></div>
                            <div class="col-sm-3"><input type="text" class="form-control" name="ota_title[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_title', $result)); ?>"/></div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="ota_description[<?php echo element('ota_id', $result); ?>]" value="<?php echo html_escape(element('ota_description', $result)); ?>" /></div>
                            <div class="col-sm-2 text-right pr20"><?php echo element('other_count', $result,0); ?></div>
                            <div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div>
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
</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).on('click', '.btn-add-rows', function() {
    $('#'+$(this).data('id')).append(' <div class="form-group list-group-item"><div class="col-sm-2"><div class="fa fa-arrows" style="cursor:pointer;"></div><input type="hidden" name="ota_id[]" /></div><div class="col-sm-3"><input type="text" class="form-control" name="ota_title[]"/></div><div class="col-sm-4"><input type="text" class="form-control" name="ota_description[]"/></div><div class="col-sm-1"><div class="col-sm-2"></div><div class="col-sm-1"><button type="button" class="btn btn-outline btn-default btn-xs btn-delete-row" >삭제</button></div></div>');
});
$(document).on('click', '.btn-delete-row', function() {
    $(this).parents('div.list-group-item').remove();
});
$(function () {
    $('#sortable_a,#sortable_b,#sortable_c,#sortable_d,#sortable_e,#sortable_f,#sortable_g,#sortable_h,#sortable_i,#sortable_j').sortable({
        handle:'.fa-arrows'
    });
})
//]]>
</script>
