<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1180">
<title><?php echo html_escape(element('page_title', $layout)); ?></title>
<?php if (element('meta_description', $layout)) { ?><meta name="description" content="<?php echo html_escape(element('meta_description', $layout)); ?>"><?php } ?>
<?php if (element('meta_keywords', $layout)) { ?><meta name="keywords" content="<?php echo html_escape(element('meta_keywords', $layout)); ?>"><?php } ?>
<?php if (element('meta_author', $layout)) { ?><meta name="author" content="<?php echo html_escape(element('meta_author', $layout)); ?>"><?php } ?>
<?php if (element('favicon', $layout)) { ?><link rel="shortcut icon" type="image/x-icon" href="<?php echo element('favicon', $layout); ?>" /><?php } ?>
<?php if (element('canonical', $view)) { ?><link rel="canonical" href="<?php echo element('canonical', $view); ?>" /><?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo element('layout_skin_url', $layout); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/ui-lightness/jquery-ui.css" />
<?php echo $this->managelayout->display_css(); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript">
// 자바스크립트에서 사용하는 전역변수 선언
var cb_url = "<?php echo trim(site_url(), '/'); ?>";
var cb_cookie_domain = "<?php echo config_item('cookie_domain'); ?>";
var cb_charset = "<?php echo config_item('charset'); ?>";
var cb_time_ymd = "<?php echo cdate('Y-m-d'); ?>";
var cb_time_ymdhis = "<?php echo cdate('Y-m-d H:i:s'); ?>";
var layout_skin_path = "<?php echo element('layout_skin_path', $layout); ?>";
var view_skin_path = "<?php echo element('view_skin_path', $layout); ?>";
var is_member = "<?php echo $this->member->is_member() ? '1' : ''; ?>";
var is_admin = "<?php echo $this->member->is_admin(); ?>";
var cb_admin_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_admin') . '"' : '""'; ?>;
var cb_manager_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_manager') . '"' : '""'; ?>;
var cb_board = "<?php echo isset($view) ? element('board_key', $view) : ''; ?>";
var cb_board_url = <?php echo ( isset($view) && element('board_key', $view)) ? 'cb_url + "/' . config_item('uri_segment_board') . '/' . element('board_key', $view) . '"' : '""'; ?>;
var cb_device_type = "<?php echo $this->cbconfig->get_device_type() === 'mobile' ? 'mobile' : 'desktop' ?>";
var cb_csrf_hash = "<?php echo $this->security->get_csrf_hash(); ?>";
var cookie_prefix = "<?php echo config_item('cookie_prefix'); ?>";
</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>
<?php echo $this->managelayout->display_js(); ?>
</head>
<body <?php echo isset($view) ? element('body_script', $view) : ''; ?>>
<div class="wrapper">

    

    <!-- nav start -->
    <nav class="navbar">
        <div class="container">
            <div class="logo pull-left">
                <a href="<?php echo site_url(); ?>" title="<?php echo html_escape($this->cbconfig->item('site_title'));?>"><?php echo $this->cbconfig->item('site_logo'); ?></a>
            </div>
            <ul class="menu pull-right">
                <?php
                $menuhtml = '';
                $menu_title='';
                $menu_dir='';
                
                if (element('menu', $layout)) {
                    $menu = element('menu', $layout);
                    if (element(0, $menu)) {

                        foreach (element(0, $menu) as $mkey => $mval) {
                            
                            if (element(element('men_id', $mval), $menu)) {
                                $mlink = element('men_link', $mval) ? element('men_link', $mval) : 'javascript:;';

                                $active='';                                
                                $menu_dir = explode('/', str_replace('/'.config_item('uri_segment_manager') . '/', '', element('men_link', $mval)));

                                if($menu_dir[0]==='board'){
                                    if(element('menu_dir1', $layout) === $menu_dir[0] && element('menu_dir2', $layout,'') === element(1,$menu_dir,'') && element('menu_dir3', $layout,'') === element(2,$menu_dir,'') && element('menu_dir4', $layout,'') === element(3,$menu_dir,'') ){ 
                                        $active='active';
                                    }
                                } else {
                                    if(element('menu_dir1', $layout) === $menu_dir[0] && element('menu_dir2', $layout,'') === element(1,$menu_dir,'') ){ 
                                        $active='active';
                                    }
                                }
                                
                                $menuhtml .= '<li class="dropdown '.$active.'">
                                <a href="' . $mlink . '" ' . element('men_custom', $mval);
                                if (element('men_target', $mval)) {
                                    $menuhtml .= ' target="' . element('men_target', $mval) . '"';
                                }
                                $menuhtml .= ' title="' . html_escape(element('men_name', $mval)) . '">' . html_escape(element('men_name', $mval)) . '</a>
                                <ul class="dropdown-menu-manager">';

                                foreach (element(element('men_id', $mval), $menu) as $skey => $sval) {
                                    $slink = element('men_link', $sval) ? element('men_link', $sval) : 'javascript:;';
                                    
                                    if('/'.uri_string()===element('men_link', $sval)){ 
                                        
                                        $menu_title=html_escape(element('men_name', $sval));
                                    }

                                    $menuhtml .= '<li><a href="' . $slink . '" ' . element('men_custom', $sval);
                                    if (element('men_target', $sval)) {
                                        $menuhtml .= ' target="' . element('men_target', $sval) . '"';
                                    }
                                    $menuhtml .= ' title="' . html_escape(element('men_name', $sval)) . '">' . html_escape(element('men_name', $sval)) . '</a></li>';
                                }
                                $menuhtml .= '</ul></li>';

                            } else {
                                $mlink = element('men_link', $mval) ? element('men_link', $mval) : 'javascript:;';

                                $menu_dir = explode('/', str_replace('/'.config_item('uri_segment_manager') . '/', '', element('men_link', $mval)));

                                $active='';                                
                                if(element('menu_dir1', $layout) === $menu_dir[0] && element('menu_dir2', $layout,'') === element(1,$menu_dir,'') && element('menu_dir3', $layout,'') === element(2,$menu_dir,'') && element('menu_dir4', $layout,'') === element(3,$menu_dir,'') ){ 
                                 
                                    $active='active';
                                    $menu_title=html_escape(element('men_name', $mval));
                                }   

                                $menuhtml .= '<li class="'.$active.'"><a href="' . $mlink . '" ' . element('men_custom', $mval);
                                if (element('men_target', $mval)) {
                                    $menuhtml .= ' target="' . element('men_target', $mval) . '"';
                                }
                                $menuhtml .= ' title="' . html_escape(element('men_name', $mval)) . '">' . html_escape(element('men_name', $mval)) . '</a></li>';
                            }
                        }
                    }
                }
                echo $menuhtml;
                ?>
                <li>
                    <a href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>" title="로그아웃"><i class="fa fa-sign-out"></i>로그아웃</a>
                </li>
                <script type="text/javascript">
                //<![CDATA[
                    $(function() {
                        $('.dropdown').hover(function() {
                            $(this).addClass('open');
                        }, function() {
                            $(this).removeClass('open');
                        });
                    });
                
                //]]>
                </script>
            </ul>
        </div>
    </nav>
    <!-- nav end -->

    <!-- main start -->
    <div class="main">
        <div class="container">
           <?php echo $menu_title ? '<h3>' . $menu_title . '</h3>' : ''; ?>

            <!-- 본문 시작 -->
            <?php if (isset($yield))echo $yield; ?>
            <!-- 본문 끝 -->

           

        </div>
    </div>
    <!-- main end -->

    <!-- footer start -->
    <footer>
        <div class="container">
            <div>
                <ul class="company">
                    <li><a href="<?php echo document_url('aboutus'); ?>" title="샘플">샘플</a></li>
                    <li><a href="<?php echo document_url('provision'); ?>" title="사양/QC정보">사양/QC정보</a></li>
                    <li><a href="<?php echo document_url('privacy'); ?>" title="원료 동향">원료 동향</a></li>
                    <li><a href="<?php echo site_url('pointranking'); ?>" title="제품 리스트 및 단가">제품 리스트 및 단가</a></li>
                    <li><a href="<?php echo site_url('pointranking/month'); ?>" title="활동 보고서" >활동 보고서</a></li>
                    <li><a href="<?php echo site_url('pointranking/month'); ?>" title="일정" >일정</a></li>
                    <li><a href="<?php echo site_url('pointranking/month'); ?>" title="견적서" >견적서</a></li>
                    <li><a href="<?php echo site_url('pointranking/month'); ?>" title="시장조사" >시장 조사</a></li>
                    <li><a href="<?php echo site_url('levelup'); ?>" title="경쟁사 정보">경쟁사 정보</a></li>
                    <li><a href="<?php echo site_url('levelup'); ?>" title="조정단가이력관리">조정단가 이력관리</a></li>
                </ul>
            </div>
            
        </div>
    </footer>
    <!-- footer end -->
</div>

<script type="text/javascript">
$(document).on('click', '.viewpcversion', function(){
    Cookies.set('device_view_type', 'desktop', { expires: 1 });
});
$(document).on('click', '.viewmobileversion', function(){
    Cookies.set('device_view_type', 'mobile', { expires: 1 });
});
</script>
<?php echo element('popup', $layout); ?>
<?php echo $this->cbconfig->item('footer_script'); ?>

<!--
Layout Directory : <?php echo element('layout_skin_path', $layout); ?>,
Layout URL : <?php echo element('layout_skin_url', $layout); ?>,
Skin Directory : <?php echo element('view_skin_path', $layout); ?>,
Skin URL : <?php echo element('view_skin_url', $layout); ?>,
-->

</body>
</html>
