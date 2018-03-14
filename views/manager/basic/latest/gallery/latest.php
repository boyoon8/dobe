<style type="text/css">
.caption {height:46px; overflow:hidden;}
</style>

<div class="col-sm-12">
    <div class="media-heading">
            <?php echo html_escape(element('board_name', element('board', $view))); ?>
    </div>
    <div class="table-box">
    <!-- Default panel contents -->
        <?php
        $attributes = array('name' => 'fboardlist', 'id' => 'fboardlist');
        echo form_open('', $attributes);
        ?>
        <?php if (element('is_admin', $view) && false) { ?>
            <div><label for="all_boardlist_check"><input id="all_boardlist_check" onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /> 전체선택</label></div>
        <?php } ?>
        
        <div class="table-image mb20">

        <?php
        $i = 0;
        $open = false;
        $cols = element('gallery_cols', element('board', $view));
        if (element('latest', $view)) {
            foreach (element('latest', $view) as $key => $value) {
                if ($cols && $i % $cols === 0) {
                    echo '<div class="row">';
                    $open = true;
                }
                $marginright = (($i+1)% $cols === 0) ? 0 : 2;
        ?>

                <div class="gallery-box" style="width:<?php echo element('gallery_percent', element('board', $view)); ?>%;margin-right:<?php echo $marginright;?>%;">
                    <?php if (element('is_admin', $view) && false) { ?><input type="checkbox" name="chk_post_id[]" value="<?php echo element('post_id', $value); ?>" /><?php } ?>
                    <!-- <span class="label label-default"><?php echo element('num', $value); ?></span> -->
                    
                    
                    
                    <a href="<?php echo element('url', $value); ?>" style="
                            <?php
                            if (element('title_color', $value)) {
                                echo 'color:' . element('title_color', $value) . ';';
                            }
                            if (element('title_font', $value)) {
                                echo 'font-family:' . element('title_font', $value) . ';';
                            }
                            if (element('title_bold', $value)) {
                                echo 'font-weight:bold;';
                            }
                            if (element('post_id', element('post', $view)) === element('post_id', $value)) {
                                echo 'font-weight:bold;';
                            }
                            ?>
                        " title="<?php echo html_escape(element('title', $value)); ?>">
                    <p style="font-weight:bold;">
                        <?php if (element('category', $value) && empty($this->input->get('category_id'))) { ?><span class="label label-default"><?php echo html_escape(element('bca_value', element('category', $value))); ?></span><?php } ?>
                        <?php if (element('post_reply', $value)) { ?><span class="label label-primary">Re</span><?php } ?>
                        <?php echo html_escape(element('title', $value)); ?>
                    </p>
                    <div class="gallery-list-content"> <?php echo element('post_content', $value); ?></div>
                    </a>
                    <div class="pull-left">작성일 : <?php echo element('display_datetime', $value); ?>
                        고객명 : <?php echo element('display_datetime', $value); ?>
                        등급 : <?php echo element('display_datetime', $value); ?>
                        상담자명 : <?php echo element('display_datetime', $value); ?>
                        <?php /*echo element('display_name', $value); ?>
                        <?php //echo element('display_datetime', $value); ?>
                        <?php if (element('is_hot', $value)) { ?><span class="label label-danger">Hot</span><?php } ?>
                        <?php if (element('is_new', $value)) { ?><span class="label label-warning">New</span><?php } ?>
                        <?php if (element('post_secret', $value)) { ?><span class="fa fa-lock"></span><?php } ?>
                        <?php if (element('post_comment_count', $value)) { ?><span class="comment-count"><i class="fa fa-comments"></i><?php echo element('post_comment_count', $value); ?></span><?php } ?>
                        <span class="hit-count"><i class="fa fa-eye"></i> <?php echo number_format(element('post_hit', $value)); */?></span>
                    </div>
                    <button class="btn btn-primary btn-sm pull-right" >완료</button>
                </div>
            <?php
                    $i++;
                    if ($cols && $i > 0 && $i % $cols === 0 && $open) {
                        echo '</div>';
                        $open = false;
                    }
                }
            } else {
                echo '<div class="nopost" >게시물이 없습니다.</div>';
            }
            if ($open) {
                echo '</div>';
                $open = false;
            }
            ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

