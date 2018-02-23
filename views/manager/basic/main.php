
<div class="col-sm-6">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">공지사항
                <div class="view-all">
                    <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- Table -->
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="col-md-6">
                    <col class="col-md-3">
                    <col class="col-md-3">
                </colgroup>
                <tbody>
                <?php
                if (element('list', element('latest_member', $view))) {
                    foreach (element('list', element('latest_member', $view)) as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                        <td><?php echo element('display_name', $value); ?></td>
                        <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">미수 채권
                <div class="view-all">
                    <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- Table -->
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="col-md-6">
                    <col class="col-md-3">
                    <col class="col-md-3">
                </colgroup>
                <tbody>
                <?php
                if (element('list', element('latest_member', $view))) {
                    foreach (element('list', element('latest_member', $view)) as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                        <td><?php echo element('display_name', $value); ?></td>
                        <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">주문 및 출하
                <div class="view-all">
                    <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- Table -->
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="col-md-6">
                    <col class="col-md-3">
                    <col class="col-md-3">
                </colgroup>
                <tbody>
                <?php
                if (element('list', element('latest_member', $view))) {
                    foreach (element('list', element('latest_member', $view)) as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                        <td><?php echo element('display_name', $value); ?></td>
                        <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">샘플
                    <div class="view-all">
                        <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- Table -->
                <table class="table table-hover table-striped">
                    <colgroup>
                        <col class="col-md-6">
                        <col class="col-md-3">
                        <col class="col-md-3">
                    </colgroup>
                    <tbody>
                    <?php
                    if (element('list', element('latest_member', $view))) {
                        foreach (element('list', element('latest_member', $view)) as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                            <td><?php echo element('display_name', $value); ?></td>
                            <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">고객 정보
                    <div class="view-all">
                        <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- Table -->
                <table class="table table-hover table-striped">
                    <colgroup>
                        <col class="col-md-6">
                        <col class="col-md-3">
                        <col class="col-md-3">
                    </colgroup>
                    <tbody>
                    <?php
                    if (element('list', element('latest_member', $view))) {
                        foreach (element('list', element('latest_member', $view)) as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                            <td><?php echo element('display_name', $value); ?></td>
                            <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">매출(목표대비)
                <div class="view-all">
                    <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- Table -->
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="col-md-6">
                    <col class="col-md-3">
                    <col class="col-md-3">
                </colgroup>
                <tbody>
                <?php
                if (element('list', element('latest_member', $view))) {
                    foreach (element('list', element('latest_member', $view)) as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                        <td><?php echo element('display_name', $value); ?></td>
                        <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">환율정보
                <div class="view-all">
                    <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- Table -->
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="col-md-6">
                    <col class="col-md-3">
                    <col class="col-md-3">
                </colgroup>
                <tbody>
                <?php
                if (element('list', element('latest_member', $view))) {
                    foreach (element('list', element('latest_member', $view)) as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                        <td><?php echo element('display_name', $value); ?></td>
                        <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<div class="col-sm-10">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">고객 욕구
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-2">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">할일
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-10">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">클레임
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-2">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">일정
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-3">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">활동 정보
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-2">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">경쟁사 정보
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-2">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">시장 조사
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-1">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">원료동향
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-1">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">제품정보
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-1">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">단가표
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-1">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">회원관리
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-1">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">회사소개서
            <div class="view-all">
                <a href="<?php echo admin_url('member/members'); ?>">More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- Table -->
        <table class="table table-hover table-striped">
            <colgroup>
                <col class="col-md-6">
                <col class="col-md-3">
                <col class="col-md-3">
            </colgroup>
            <tbody>
            <?php
            if (element('list', element('latest_member', $view))) {
                foreach (element('list', element('latest_member', $view)) as $key => $value) {
            ?>
                <tr>
                    <td><?php echo html_escape(element('mem_userid', $value)); ?></td>
                    <td><?php echo element('display_name', $value); ?></td>
                    <td class="text-right"><?php echo display_datetime(element('mem_register_datetime', $value)); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>