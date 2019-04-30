<?php
/*
 * @Author: wells
 * @decription: kdniao服务类
 * @since: 2019-04-30 15:04:03
 * @lastTime: 2019-04-30 16:25:43
 */

namespace Zhange\Kdniao;


class Kdniao
{
    /**
     * @var 商户id
     */
    protected $ebussionsid;

    /**
     * @var appkey
     */
    protected $appkey;

    /**
     * Kdniao constructor.
     * @param $ebussionid
     * @param $appkey
     */
    public function __construct()
    {
        $this->ebussionsid=env('KDNIAO_EBUSSINESSID','');
        $this->appkey=env('KDNIAO_APPKEY','');
    }


    public function getOrderTraces($shipperCode,$LogisticCode)
    {
        $json = $shipperCode . $LogisticCode;
       	echo $json;
       	die;
    }

}