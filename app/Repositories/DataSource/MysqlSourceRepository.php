<?php
/**
 * Created by PhpStorm.
 * User: Gentrina
 * Date: 7/7/2019
 * Time: 2:14 PM
 */

namespace App\Repositories\DataSource;
use App\Shipping;

class MysqlSourceRepository implements DataSourceRepository
{
    /**
     * @param $code
     * @return mixed
     */
    public function getDateByTrackingCode($code)
    {
        return Shipping::where('tracking_code', $code)->first();
    }
}