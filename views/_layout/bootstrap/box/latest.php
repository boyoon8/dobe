<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/calendar.css'); ?>" />

<!-- sidebar_latest start -->
<div class="sidebar_latest">
    <div class="headline">
        <h3>그룹1</h3>
    </div>
    <ul class="mt20">
        <li><a href="javascript:;" onClick="open_profile('<?php echo $this->member->item('mem_userid'); ?>');" class="btn btn-default btn-xs" title="hotline">HOTLINE</a></li>
        <li><a href="<?php echo site_url('mypage'); ?>" class="btn btn-default btn-xs" title="공지사항">공지사항</a></li>
        <li><a href="<?php echo site_url('mypage/scrap'); ?>" class="btn btn-default btn-xs" title="나의 스크랩">일정</a></li>
        <li><a href="<?php echo site_url('membermodify'); ?>" class="btn btn-default btn-xs" title="정보수정">할일</a></li>
        <li><?php echo element('calendar',$view); ?></li>
        
    </ul>
</div>
<div class="sidebar_latest">
    <div class="headline">
        <h3>그룹2</h3>
    </div>
    <ul class="mt20">
        <li><a href="javascript:;" onClick="open_profile('<?php echo $this->member->item('mem_userid'); ?>');" class="btn btn-default btn-xs" title="활동보고서">활동보고서</a></li>
        <li><a href="<?php echo site_url('mypage'); ?>" class="btn btn-default btn-xs" title="신규작성">신규 작성</a></li>
        <li><a href="<?php echo site_url('mypage/scrap'); ?>" class="btn btn-default btn-xs" title="모바일 작업">모바일 작업</a></li>
        
    </ul>
</div>
<div class="sidebar_latest">
    <div class="headline">
        <h3>그룹3</h3>
    </div>
    <ul class="mt20">
        <li><a href="javascript:;" onClick="open_profile('<?php echo $this->member->item('mem_userid'); ?>');" class="btn btn-default btn-xs" title="클레임">클레임</a></li>
        <li><a href="<?php echo site_url('mypage'); ?>" class="btn btn-default btn-xs" title="고객욕구사항">고객 욕구 사항</a></li>
        <li><a href="<?php echo site_url('mypage/scrap'); ?>" class="btn btn-default btn-xs" title="견적서">견적서</a></li>
        <li><a href="<?php echo site_url('mypage/scrap'); ?>" class="btn btn-default btn-xs" title="주문서">주문서</a></li>
        <li><a href="<?php echo site_url('mypage/scrap'); ?>" class="btn btn-default btn-xs" title="샘플">샘플</a></li>
        
    </ul>
</div>
<!-- sidebar_latest end -->