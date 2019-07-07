<?php
/**
 * Created by PhpStorm.
 * User: Gentrina
 * Date: 7/7/2019
 * Time: 2:19 PM
 */

namespace App\Repositories;


use App\Repositories\DataSource\CsvSourceRepository;
use App\Repositories\DataSource\MysqlSourceRepository;
use Illuminate\Support\Manager;

class RepositoryManager extends Manager
{

    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        if (env('STORAGE_DRIVER') == 'csv') {
            return 'CsvRepository';
        }

        return 'MysqlRepository';
    }

    /**
     * @return MysqlSourceRepository
     */
    protected function createMysqlRepositoryDriver()
    {
        return new MysqlSourceRepository();
    }

    /**
     * @return CsvSourceRepository
     */
    protected function createCsvRepositoryDriver()
    {
        return new CsvSourceRepository();
    }
}