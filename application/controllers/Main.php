<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 메인 페이지를 담당하는 controller 입니다.
 */
class Main extends CB_Controller
{

    /**
     * 모델을 로딩합니다
     */
    protected $models = array('Board');

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
        $this->load->library(array('querystring','javascript'));
    }


    /**
     * 전체 메인 페이지입니다
     */
    public function index()
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_main_index';
        $this->load->event($eventname);

        $view = array();
        $view['view'] = array();

        // 이벤트가 존재하면 실행합니다
        $view['view']['event']['before'] = Events::trigger('before', $eventname);

        $where = array(
            'brd_search' => 1,
        );
        $board_id = $this->Board_model->get_board_list($where);
        $board_list = array();
        if ($board_id && is_array($board_id)) {
            foreach ($board_id as $key => $val) {
                $board_list[] = $this->board->item_all(element('brd_id', $val));
            }
        }
        $view['view']['board_list'] = $board_list;
        $view['view']['canonical'] = site_url();

        $prefs = array (
               // 'show_next_prev'  => TRUE,
               'template'   => '
                {table_open}<table cellpadding="1" cellspacing="2" class="main-calendar col-md-12">{/table_open}

                {heading_row_start}<tr>{/heading_row_start}

                {heading_previous_cell}<th class="prev_sign"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
                {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
                {heading_next_cell}<th class="next_sign"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

                {heading_row_end}</tr>{/heading_row_end}

                //Deciding where to week row start
                {week_row_start}<tr class="week_name" >{/week_row_start}
                //Deciding  week day cell and  week days
                {week_day_cell}<td >{week_day}</td>{/week_day_cell}
                //week row end
                {week_row_end}</tr>{/week_row_end}

                {cal_row_start}<tr>{/cal_row_start}
                {cal_cell_start}<td>{/cal_cell_start}

                {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
                {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

                {cal_cell_no_content}{day}{/cal_cell_no_content}
                {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

                {cal_cell_blank}&nbsp;{/cal_cell_blank}

                {cal_cell_end}</td>{/cal_cell_end}
                {cal_row_end}</tr>{/cal_row_end}

                {table_close}</table>{/table_close}
                '
             );

        $this->load->library('calendar', $prefs);

        $view['view']['calendar'] = $this->calendar->generate();


        $calendarPreference = array (
                        'start_day'    => 'saturday',
                        'month_type'   => 'long',
                        'day_type'     => 'long',
                        'date'     => date(mktime(0, 0, 0, date('m'), date('d'), date('Y'))),
                        'url' => 'week/',
                    );        
        $this->load->library('calendar_week', $calendarPreference);

        // I need to feed my calndar week with some data
        // for the example data are empty
        $weeks = $this->calendar_week->get_week();

        $arr_Data = Array();
        for ($i=0;$i<count($weeks);$i++){
            $arr_Data[$weeks[$i]] = '';
        }

        
        // 이벤트가 존재하면 실행합니다
        $view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);
        
        /**
         * 레이아웃을 정의합니다
         */
        $page_title = $this->cbconfig->item('site_meta_title_main');
        $meta_description = $this->cbconfig->item('site_meta_description_main');
        $meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
        $meta_author = $this->cbconfig->item('site_meta_author_main');
        $page_name = $this->cbconfig->item('site_page_name_main');

        $layoutconfig = array(
            'path' => 'main',
            'layout' => 'layout',
            'skin' => 'main',
            'layout_dir' => $this->cbconfig->item('layout_main'),
            'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
            'use_sidebar' => $this->cbconfig->item('sidebar_main'),
            'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
            'skin_dir' => $this->cbconfig->item('skin_main'),
            'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
            'page_title' => $page_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords,
            'meta_author' => $meta_author,
            'page_name' => $page_name,
        );
        $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
        $this->data = $view;
        $this->layout = element('layout_skin_file', element('layout', $view));
        $this->view = element('view_skin_file', element('layout', $view));
    }
}
