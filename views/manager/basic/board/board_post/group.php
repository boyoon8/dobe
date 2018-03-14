<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); 
$this->managelayout->add_css(base_url('assets/css/datepicker3.css'));
$this->managelayout->add_js(base_url('assets/js/bootstrap.min.js'));
$this->managelayout->add_js(base_url('assets/js/bootstrap-datepicker.js'));
$this->managelayout->add_js(base_url('assets/js/bootstrap-datepicker.kr.js'));
echo display_html_content(element('headercontent', element('group', $view)));
?>
<div class="col-sm-12">
    <div class="board box-table">
    <div class="row mb20">
        
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
echo display_html_content(element('headercontent', element('group', $view)));

$k = 0;
$is_open = false;
if (element('board_list', $view)) {
    foreach (element('board_list', $view) as $key => $board) {
        $config = array(
            'skin' => 'basic',
            'brd_id' => element('brd_id', $board),
            'limit' => 5,
            'length' => 25,
            'is_gallery' => '',
            'image_width' => '',
            'image_height' => '',
            'cache_minute' => 1,
            'post_notice' => 3,
        );
        if ($k % 2 === 0) {
            echo '<div>';
            $is_open = true;
        }
        echo $this->board->manager_latest($config);
        if ($k % 2 === 1) {
            echo '</div>';
            $is_open = false;
        }
        $k++;
    }
}
if ($is_open) {
    echo '</div>';
    $is_open = false;
}


?>
        <div class="pull-left mr10">
            <a href="<?php echo element('list_url', element('list', $view)); ?>" class="btn btn-default btn-sm">목록</a>
            <?php if (element('search_list_url', element('list', $view))) { ?>
                <a href="<?php echo element('search_list_url', element('list', $view)); ?>" class="btn btn-default btn-sm">검색목록</a>
            <?php } ?>
        </div>
    </div>
</div>
<?php 
echo display_html_content(element('footercontent', element('group', $view)));

?>

