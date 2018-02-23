<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendar_week extends CI_Controller {

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
    
    function index($year='', $month='', $day=''){
        if ($year==null) {
            $year = date('Y');
        }
        
        if ($month==null) {
            $month = date('m');
        }
        
        if ($day==null) {
            $day = date('d');        
        }    

        $calendarPreference = array (
                        'start_day'    => 'saturday',
                        'month_type'   => 'long',
                        'day_type'     => 'long',
                        'date'     => date(mktime(0, 0, 0, $month, $day, $year)),
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

        $content['data'] = $arr_Data;      
        $this->load->view('show_week', $content);
       
    }
} 
