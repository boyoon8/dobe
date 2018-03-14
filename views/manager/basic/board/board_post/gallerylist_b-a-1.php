<?php
$this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); 
$this->managelayout->add_css(base_url('assets/css/datepicker3.css'));
$this->managelayout->add_js(base_url('assets/js/bootstrap.min.js'));
$this->managelayout->add_js(base_url('assets/js/bootstrap-datepicker.js'));
$this->managelayout->add_js(base_url('assets/js/bootstrap-datepicker.kr.js'));
 ?>

<?php echo element('headercontent', element('board', element('list', $view))); ?>
<div class="col-sm-6">
<div class="board box-table">
    <!-- <h3><?php echo html_escape(element('board_name', element('board', element('list', $view)))); ?></h3> -->
    <div class="row mb20">
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>'); ?>
        <div class="col-md-12">
            <div class=" ">
                <form class="navbar-form navbar-right pull-right" action="<?php echo manager_board_url(element('brd_key', element('board', element('list', $view)))); ?>" onSubmit="return postSearch(this);">
                    <input type="hidden" name="findex" value="<?php echo html_escape($this->input->get('findex')); ?>" />
                    <input type="hidden" name="category_id" value="<?php echo html_escape($this->input->get('category_id')); ?>" />
                    <div class="form-group">
                        <span class="mr10 pull-left">
                            기간 : <input type="text" class="form-control input-small datepicker px100" name="start_date" value="<?php echo $this->input->get('start_date')?>" readonly="readonly" /> - <input type="text" class="form-control input-small datepicker px100" name="end_date" value="<?php echo $this->input->get('end_date')?>" readonly="readonly" />
                        </span>
                        <select class="form-control pull-left px100" name="sfield">
                            <option value="post_both" <?php echo ($this->input->get('sfield') === 'post_both') ? ' selected="selected" ' : ''; ?>>제목+내용</option>
                            <option value="post_title" <?php echo ($this->input->get('sfield') === 'post_title') ? ' selected="selected" ' : ''; ?>>제목</option>
                            <option value="post_content" <?php echo ($this->input->get('sfield') === 'post_content') ? ' selected="selected" ' : ''; ?>>내용</option>
                        </select>
                        <input type="text" class="form-control px150" placeholder="Search" name="skeyword" value="<?php echo html_escape($this->input->get('skeyword')); ?>" />
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            
            <?php if (element('point_info', element('list', $view))) { ?>
                <div class="point-info pull-right mr10">
                    <button class="btn-point-info btn-link" data-toggle="popover" data-trigger="focus" data-placement="left" title="포인트안내" data-content="<?php echo element('point_info', element('list', $view)); ?>"
                    ><i class="fa fa-info-circle fa-lg"></i></button>
                </div>
            <?php } ?>
        </div>
        <script type="text/javascript">
        //<![CDATA[
        function postSearch(f) {
            var skeyword = f.skeyword.value.replace(/(^\s*)|(\s*$)/g,'');
            if (skeyword.length < 2) {
                alert('2글자 이상으로 검색해 주세요');
                f.skeyword.focus();
                return false;
            }
            return true;
        }
        
        $('.btn-point-info').popover({
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><div class="popover-title"></div><div class="popover-content"></div></div>',
            html : true
        });
        //]]>
        </script>
    </div>

    <?php
    if (element('use_category', element('board', element('list', $view))) && element('cat_display_style', element('board', element('list', $view))) === 'tab') {
        $category = element('category', element('board', element('list', $view)));
    ?>
        <ul class="nav nav-tabs clearfix">
            <li role="presentation" <?php if ( ! $this->input->get('category_id')) { ?>class="active" <?php } ?>><a href="<?php echo manager_board_url(element('brd_key', element('board', element('list', $view)))); ?>?findex=<?php echo html_escape($this->input->get('findex')); ?>&category_id=">전체</a></li>
            <?php
            if (element(0, $category)) {
                foreach (element(0, $category) as $ckey => $cval) {
            ?>
                <li role="presentation" <?php if ($this->input->get('category_id') === element('bca_key', $cval)) { ?>class="active" <?php } ?>><a href="<?php echo manager_board_url(element('brd_key', element('board', element('list', $view)))); ?>?findex=<?php echo html_escape($this->input->get('findex')); ?>&category_id=<?php echo element('bca_key', $cval); ?>"><?php echo html_escape(element('bca_value', $cval)); ?></a></li>
            <?php
                }
            }
            ?>
        </ul>
    <?php } ?>

    <?php
    $attributes = array('name' => 'fboardlist', 'id' => 'fboardlist');
    echo form_open('', $attributes);
    ?>
        <?php if (element('is_admin', $view)) { ?>
            <div><label for="all_boardlist_check"><input id="all_boardlist_check" onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /> 전체선택</label></div>
        <?php } ?>

        <?php
        if (element('notice_list', element('list', $view))) {
        ?>
            <table class="table table-hover">
                <tbody>
                <?php
                foreach (element('notice_list', element('list', $view)) as $result) {
                ?>
                    <tr>
                        <?php if (element('is_admin', $view)) { ?><th scope="row"><input type="checkbox" name="chk_post_id[]" value="<?php echo element('post_id', $result); ?>" /></th><?php } ?>
                        <td><span class="label label-primary">공지</span></td>
                        <td>
                            <?php if (element('post_reply', $result)) { ?><span class="label label-primary" style="margin-left:<?php echo strlen(element('post_reply', $result)) * 10; ?>px">Re</span><?php } ?>
                            <a href="<?php echo element('url', $result); ?>" style="
                                <?php
                                if (element('title_color', $result)) {
                                    echo 'color:' . element('title_color', $result) . ';';
                                }
                                if (element('title_font', $result)) {
                                    echo 'font-family:' . element('title_font', $result) . ';';
                                }
                                if (element('title_bold', $result)) {
                                    echo 'font-weight:bold;';
                                }
                                if (element('post_id', element('post', $view)) === element('post_id', $result)) {
                                    echo 'font-weight:bold;';
                                }
                                ?>
                            " title="<?php echo html_escape(element('title', $result)); ?>"><?php echo html_escape(element('title', $result)); ?></a>
                            <?php if (element('is_mobile', $result)) { ?><span class="fa fa-wifi"></span><?php } ?>
                            <?php if (element('post_file', $result)) { ?><span class="fa fa-download"></span><?php } ?>
                            <?php if (element('post_secret', $result)) { ?><span class="fa fa-lock"></span><?php } ?>
                            <?php    if (element('ppo_id', $result)) { ?><i class="fa fa-bar-chart"></i><?php } ?>
                            <?php if (element('post_comment_count', $result)) { ?><span class="label label-warning">+<?php echo element('post_comment_count', $result); ?></span><?php } ?>
                        <td><?php echo element('display_name', $result); ?></td>
                        <td><?php echo element('display_datetime', $result); ?></td>
                        <td><?php echo number_format(element('post_hit', $result)); ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>

    <div class="table-image mb20" >
        <?php
        $i = 0;
        $open = false;
        $cols = element('gallery_cols', element('board', element('list', $view)));
        if (element('list', element('data', element('list', $view)))) {
            foreach (element('list', element('data', element('list', $view))) as $result) {
                if ($cols && $i % $cols === 0) {
                    echo '<div class="row">';
                    $open = true;
                }
                $marginright = (($i+1)% $cols === 0) ? 0 : 2;
        ?>
            <div class="gallery-box" style="width:<?php echo element('gallery_percent', element('board', element('list', $view))); ?>%;margin-right:<?php echo $marginright;?>%;">
                <?php if (element('is_admin', $view)) { ?><input type="checkbox" name="chk_post_id[]" value="<?php echo element('post_id', $result); ?>" /><?php } ?>
                <!-- <span class="label label-default"><?php echo element('num', $result); ?></span> -->
                
                
                
                <a href="<?php echo element('url', $result); ?>" style="
                        <?php
                        if (element('title_color', $result)) {
                            echo 'color:' . element('title_color', $result) . ';';
                        }
                        if (element('title_font', $result)) {
                            echo 'font-family:' . element('title_font', $result) . ';';
                        }
                        if (element('title_bold', $result)) {
                            echo 'font-weight:bold;';
                        }
                        if (element('post_id', element('post', $view)) === element('post_id', $result)) {
                            echo 'font-weight:bold;';
                        }
                        ?>
                    " title="<?php echo html_escape(element('title', $result)); ?>">
                <p style="font-weight:bold;">
                    <?php if (element('category', $result) && empty($this->input->get('category_id'))) { ?><span class="label label-default"><?php echo html_escape(element('bca_value', element('category', $result))); ?></span><?php } ?>
                    <?php if (element('post_reply', $result)) { ?><span class="label label-primary">Re</span><?php } ?>
                    <?php echo html_escape(element('title', $result)); ?>
                </p>
                <div class="gallery-list-content"> <?php echo element('post_content', $result); ?></div>
                </a>
                <div class="pull-left">작성일 : <?php echo element('display_datetime', $result); ?>
                    고객명 : <?php echo element('display_datetime', $result); ?>
                    등급 : <?php echo element('display_datetime', $result); ?>
                    상담자명 : <?php echo element('display_datetime', $result); ?>
                    <?php /*echo element('display_name', $value); ?>
                    <?php //echo element('display_datetime', $value); ?>
                    <?php if (element('is_hot', $value)) { ?><span class="label label-danger">Hot</span><?php } ?>
                    <?php if (element('is_new', $value)) { ?><span class="label label-warning">New</span><?php } ?>
                    <?php if (element('post_secret', $value)) { ?><span class="fa fa-lock"></span><?php } ?>
                    <?php if (element('post_comment_count', $value)) { ?><span class="comment-count"><i class="fa fa-comments"></i><?php echo element('post_comment_count', $value); ?></span><?php } ?>
                    <span class="hit-count"><i class="fa fa-eye"></i> <?php echo number_format(element('post_hit', $value)); */?></span>
                </div>
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

    <div class="border_button">
        <div class="pull-left mr10">
            <a href="<?php echo element('list_url', element('list', $view)); ?>" class="btn btn-default btn-sm">목록</a>
            <?php if (element('search_list_url', element('list', $view))) { ?>
                <a href="<?php echo element('search_list_url', element('list', $view)); ?>" class="btn btn-default btn-sm">검색목록</a>
            <?php } ?>
            <div class="btn btn-default btn-sm" onClick="post_multi_change_category();"><i class="fa fa-tags"></i> 카테고리변경</div>
                    
                    <div class="btn btn-default btn-sm" onClick="post_multi_action('multi_delete', '0', '선택하신 글들을 완전삭제하시겠습니까?');"><i class="fa fa-trash-o"></i> 선택삭제하기</div>
        </div>
        
        <?php if (element('write_url', element('list', $view))) { ?>
            <div class="pull-right">
                <a href="<?php echo element('write_url', element('list', $view)); ?>" class="btn btn-success btn-sm">글쓰기</a>
            </div>
            <?php } ?>
        </div>
        <nav><?php echo element('paging', element('list', $view)); ?></nav>
</div>

<?php echo element('footercontent', element('board', element('list', $view))); ?>
</div>
<div class="col-sm-6">
    <div class="box mb20">
    <div class="box-table">
        <div class="box-table-header">
            <div class="pull-left media-heading" id="detail_subject">
                고객욕구 상세보기  
            </div>
            
        </div>
        <div id="detail_view">
            
        </div>
    </div>
    </div>
</div>
<?php
if (element('highlight_keyword', element('list', $view))) {
    $this->managelayout->add_js(base_url('assets/js/jquery.highlight.js')); ?>
<script type="text/javascript">
//<![CDATA[
$('#fboardlist').highlight([<?php echo element('highlight_keyword', element('list', $view));?>]);
//]]>
</script>
<?php } ?>
<script type="text/javascript">
//<![CDATA[
function view_post(id, post_id, page, opt, message) {
        if (opt) {
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - 100
            }, 0);
        }

        var comment_url = cb_url + '/manager/board/board_post/post/' + post_id + '?page=' + page;
        var hash = window.location.hash;

        $('#' + id).load(comment_url, function() {
            if (message) {
                $('.alert-comment-list-message-content').html(message);
                $('.alert-comment-list-message').addClass('alert-success').removeClass('alert-warning').show(0).delay(2500).hide(0);
            }
            if (hash) {
                var st = $(hash).offset().top;
                $('html, body').animate({ scrollTop: st }, 200); //200ms duration
            }
            if (typeof(SyntaxHighlighter) !== 'undefined') {
                SyntaxHighlighter.highlight();
            }
            $("#detail_subject").html('<?php echo html_escape(element('board_name', element('board', element('list', $view)))); ?> 상세보기');
        });
    }

function write_post(id, brd_key, page, opt, message) {
        if (opt) {
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - 100
            }, 0);
        }

        var comment_url = cb_url + '/manager/board/board_write/write/' + brd_key;
        var hash = window.location.hash;

        $('#' + id).load(comment_url, function() {
            if (message) {
                $('.alert-comment-list-message-content').html(message);
                $('.alert-comment-list-message').addClass('alert-success').removeClass('alert-warning').show(0).delay(2500).hide(0);
            }
            if (hash) {
                var st = $(hash).offset().top;
                $('html, body').animate({ scrollTop: st }, 200); //200ms duration
            }
            $("#detail_subject").html('<?php echo html_escape(element('board_name', element('board', element('list', $view)))); ?> 쓰기');
        });
    }

function modify_post(id, post_id, page, opt, message) {
        if (opt) {
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - 100
            }, 0);
        }

        var comment_url = cb_url + '/manager/board/board_write/modify/' + post_id;
        var hash = window.location.hash;

        $('#' + id).load(comment_url, function() {
            if (message) {
                $('.alert-comment-list-message-content').html(message);
                $('.alert-comment-list-message').addClass('alert-success').removeClass('alert-warning').show(0).delay(2500).hide(0);
            }
            if (hash) {
                var st = $(hash).offset().top;
                $('html, body').animate({ scrollTop: st }, 200); //200ms duration
            }
            $("#detail_subject").html('<?php echo html_escape(element('board_name', element('board', element('list', $view)))); ?> 수정');
        });
    }

<?php echo element('view_post',$view,''); ?>
//]]>
</script>