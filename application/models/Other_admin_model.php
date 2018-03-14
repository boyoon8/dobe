<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Other admin model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Other_admin_model extends CB_Model
{

    /**
     * 테이블명
     */
    public $_table = 'other_admin';

    /**
     * 사용되는 테이블의 프라이머리키
     */
    public $primary_key = 'ota_id'; // 사용되는 테이블의 프라이머리키

    public $cache_name = 'other_admin/other-admin-model-get'; // 캐시 사용시 프리픽스

    public $cache_time = 86400; // 캐시 저장시간

    function __construct()
    {
        parent::__construct();

        check_cache_dir('other_admin');
    }


    public function get_admin_list($limit = '', $offset = '', $where = '', $like = '', $findex = '', $forder = '', $sfield = '', $skeyword = '', $sop = 'OR')
    {
        $result = $this->_get_list_common($select = '', $join = '', $limit, $offset, $where, $like, $findex, $forder, $sfield, $skeyword, $sop);
        return $result;
    }


    public function get_all_group()
    {
        $cachename = $this->cache_name;
        if ( ! $result = $this->cache->get($cachename)) {
            $result = array();
            $res = $this->get($primary_value = '', $select = '', $where = '', $limit = '', $offset = 0, $findex = 'ota_order', $forder = 'ASC');
            if ($res && is_array($res)) {
                foreach ($res as $val) {
                    $result[$val['ota_id']] = $val;
                }
            }
            $this->cache->save($cachename, $result, $this->cache_time);
        }
        return $result;
    }


    public function item($groupid = 0)
    {
        $groupid = (int) $groupid;
        if (empty($groupid) OR $groupid < 1) {
            return false;
        }

        $data = $this->get_all_group();
        $result = isset($data[ $groupid ]) ? $data[ $groupid ] : false;

        return $result;
    }


    public function update_group($data = '')
    {
        $order = 1;

        if($data['ota_type']==='other_sub_1'){
            if (element('ota_id', $data) && is_array(element('ota_id', $data))) {
                foreach (element('ota_id', $data) as $key => $value) {
                    if ( ! element($key, element('ota_title', $data))) {
                        continue;
                    }
                    if ($value) {
                        
                        $updatedata = array(
                            'ota_title' => $data['ota_title'][$key],
                            'ota_value' => $data['ota_value'][$key],
                            'ota_datetime' => cdate('Y-m-d H:i:s'),
                            'ota_order' => $order,
                            'ota_description' => $data['ota_description'][$key],
                            'ota_type' => $data['ota_type'],
                        );
                        $this->update($value, $updatedata);
                    } else {
                        
                        $insertdata = array(
                            'ota_title' => $data['ota_title'][$key],
                            'ota_value' => $data['ota_value'][$key],
                            'ota_datetime' => cdate('Y-m-d H:i:s'),
                            'ota_order' => $order,
                            'ota_description' => $data['ota_description'][$key],
                            'ota_type' => $data['ota_type'],
                        );
                        $this->insert($insertdata);
                    }
                $order++;
                }
            }
            $deletewhere = array(
                'ota_datetime !=' => cdate('Y-m-d H:i:s'),
                'ota_type' => $data['ota_type'],
                'ota_value' => $data['ota_value'][$key],
            );
        } else {
            
            
            if (element('ota_id', $data) && is_array(element('ota_id', $data))) {

                foreach (element('ota_id', $data) as $key => $value) {
                    if ( ! element($key, element('ota_title', $data))) {
                        continue;
                    }
                    if ($value) {
                        
                        $updatedata = array(
                            'ota_title' => $data['ota_title'][$key],
                            'ota_value' => $data['ota_value'],
                            'ota_datetime' => cdate('Y-m-d H:i:s'),
                            'ota_order' => $order,
                            'ota_description' => $data['ota_description'][$key],
                            'ota_type' => $data['ota_type'],
                        );
                        $this->update($value, $updatedata);
                    } else {
                        
                        $insertdata = array(
                            'ota_title' => $data['ota_title'][$key],
                            'ota_value' => $data['ota_value'],
                            'ota_datetime' => cdate('Y-m-d H:i:s'),
                            'ota_order' => $order,
                            'ota_description' => $data['ota_description'][$key],
                            'ota_type' => $data['ota_type'],
                        );
                        $this->insert($insertdata);
                    }
                $order++;
                }
            }
            $deletewhere = array(
                'ota_datetime !=' => cdate('Y-m-d H:i:s'),
                'ota_type' => $data['ota_type'],
                'ota_value' => $data['ota_value'],
            );
        }

        $this->delete_where($deletewhere);
        $this->cache->delete($this->cache_name);
    }
}
