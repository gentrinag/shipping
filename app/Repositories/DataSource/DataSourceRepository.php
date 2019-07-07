<?php
/**
 * Created by PhpStorm.
 * User: Gentrina
 * Date: 7/7/2019
 * Time: 2:09 PM
 */
namespace App\Repositories\DataSource;

/**
 * Interface DataSourceRepository
 * @package App\Repositories\DataSource
 */
interface DataSourceRepository
{
    public function getDateByTrackingCode($code);
}