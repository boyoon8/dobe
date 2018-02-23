<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Otheradmin class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 관리자>회원설정>회원그룹관리 controller 입니다.
 */
class Otheradmin extends CB_Controller
{

    /**
     * 관리자 페이지 상의 현재 디렉토리입니다
     * 페이지 이동시 필요한 정보입니다
     */
    public $pagedir = 'other/otheradmin';

    /**
     * 모델을 로딩합니다
     */
    protected $models = array('Other_admin');

    /**
     * 이 컨트롤러의 메인 모델 이름입니다
     */
    protected $modelname = 'Other_admin_model';

    /**
     * 헬퍼를 로딩합니다
     */
    protected $helpers = array('form', 'array');

    function __construct()
    {
        parent::__construct();

        /**
         * 라이브러리를 로딩합니다
         */
        $this->load->library(array('querystring'));
    }

    /**
     * 회원 그룹 목록을 가져오는 메소드입니다
     */
    public function other_sub_1()
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_admin_member_otheradmin_index';
        $this->load->event($eventname);

        $view = array();
        $view['view'] = array();

        // 이벤트가 존재하면 실행합니다
        $view['view']['event']['before'] = Events::trigger('before', $eventname);

        /**
         * 페이지에 숫자가 아닌 문자가 입력되거나 1보다 작은 숫자가 입력되면 에러 페이지를 보여줍니다.
         */
        $param =& $this->querystring;
        $findex = 'ota_order';
        $forder = 'asc';


        /**
         * Validation 라이브러리를 가져옵니다
         */
        $this->load->library('form_validation');

        /**
         * 전송된 데이터의 유효성을 체크합니다
         */
        $config = array(
            array(
                'field' => 's',
                'label' => '그룹명',
                'rules' => 'trim',
            ),
        );
        $this->form_validation->set_rules($config);


        /**
         * 유효성 검사를 하지 않는 경우, 또는 유효성 검사에 실패한 경우입니다.
         * 즉 글쓰기나 수정 페이지를 보고 있는 경우입니다
         */
        if ($this->form_validation->run() === false) {

            // 이벤트가 존재하면 실행합니다
            $view['view']['event']['formrunfalse'] = Events::trigger('formrunfalse', $eventname);

        } else {
            /**
             * 유효성 검사를 통과한 경우입니다.
             * 즉 데이터의 insert 나 update 의 process 처리가 필요한 상황입니다
             */

            // 이벤트가 존재하면 실행합니다
            $view['view']['event']['formruntrue'] = Events::trigger('formruntrue', $eventname);

            $updatedata = $this->input->post();

            $this->{$this->modelname}->update_group($updatedata);
            $view['view']['alert_message'] = '정상적으로 저장되었습니다';
        }

        /**
         * 게시판 목록에 필요한 정보를 가져옵니다.
         */
        $this->{$this->modelname}->allow_order_field = array('ota_order'); // 정렬이 가능한 필드
        $result = $this->{$this->modelname}
            ->get_admin_list('', '', '', '', $findex, $forder);
        if (element('list', $result)) {
            foreach (element('list', $result) as $key => $val) {
                $countwhere = array(
                    'ota_id' => element('ota_id', $val),
                );
                $result['list'][$key]['member_count'] = $this->Other_admin_member_model->count_by($countwhere);
            }
        }
        $view['view']['data'] = $result;

        /**
         * primary key 정보를 저장합니다
         */
        $view['view']['primary_key'] = $this->{$this->modelname}->primary_key;

        // 이벤트가 존재하면 실행합니다
        $view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

        /**
         * 어드민 레이아웃을 정의합니다
         */
        /**
         * 레이아웃을 정의합니다
         */
        $page_title = $this->cbconfig->item('site_meta_title_main');        
        $page_name = $this->cbconfig->item('site_page_name_main');

        $layoutconfig = array(
            'path' => 'manager',
            'layout' => 'layout',
            'skin' => 'index',
            'layout_dir' => $this->cbconfig->item('layout_manager'),
            'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_manager'),
            'use_sidebar' => $this->cbconfig->item('sidebar_manager'),
            'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_manager'),
            'skin_dir' => $this->cbconfig->item('skin_manager'),
            'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_manager'),
            'page_title' => $page_title,            
            'page_name' => $page_name,
        );
        $view['layout'] = $this->managelayout->manager_front($layoutconfig, $this->cbconfig->get_device_view_type());
        $this->data = $view;
        $this->layout = element('layout_skin_file', element('layout', $view));
        
        $this->view = element('view_skin_file', element('layout', $view));
    }


    
}
