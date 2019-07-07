<?php
/**
 * Created by PhpStorm.
 * User: Gentrina
 * Date: 7/7/2019
 * Time: 2:13 PM
 */

namespace App\Repositories\DataSource;
use League\Csv\Reader;

class CsvSourceRepository implements DataSourceRepository
{
    /**
     * Get data from csv
     * @param $code
     * @return object|void
     *
     */
    public function getDateByTrackingCode($code)
    {
        $reader = Reader::createFromPath(base_path().'/database/csv/shippings.csv');
        $reader->addFilter(function ($row) use ($code) {
            return $code == $row[1];
        });
        $result = $reader->fetchOne(0);
        if ($result) {
            return (object) ['id' => $result[0], 'tracking_code' => $result[1], 'estimated_delivery_date' => $result[2]];
        } else {
            return;
        }
    }
}