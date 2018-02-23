<?php
// $k = 0;
// $is_open = false;
// if (element('board_list', $view)) {
//     foreach (element('board_list', $view) as $key => $board) {
//         $config = array(
//             'skin' => 'bootstrap',
//             'brd_key' => element('brd_key', $board),
//             'limit' => 5,
//             'length' => 40,
//             'is_gallery' => '',
//             'image_width' => '',
//             'image_height' => '',
//             'cache_minute' => 1,
//         );
//         if ($k % 2 === 0) {
//             echo '<div class="row">';
//             $is_open = true;
//         }
//         echo $this->board->latest($config);
//         if ($k % 2 === 1) {
//             echo '</div>';
//             $is_open = false;
//         }
//         $k++;
//     }
// }
// if ($is_open) {
//     echo '</div>';
//     $is_open = false;
// }
?>
<div class="col-sm-5">
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
    <div class="col-sm-5">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">주문 및 주문
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
    <div class="col-sm-7">
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
    <div class="col-sm-12">
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
    <div class="col-sm-12">
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

</div>
<div class="col-sm-7">
    <div class="col-sm-3">
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
    <div class="col-sm-6">
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
    <div class="col-sm-3">
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
    <div class="col-sm-6">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">전체 매출
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
            <div class="panel-heading">전체 수금
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
            <div class="panel-heading">개인 매출
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
            <div class="panel-heading">개인 수금
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