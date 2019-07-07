<?php

namespace App\Http\Controllers;

use App\Repositories\DataSource\DataSourceRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShippingsController extends Controller
{
    /**
     * @var DataSourceRepository
     */
    private $repository;

    /**
     * ShippingsController constructor.
     * @param DataSourceRepository $repository
     */
    public function __construct(DataSourceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $code
     * @return JsonResponse
     */
    public function show($code) : JsonResponse
    {
        $result = $this->repository->getDateByTrackingCode($code);

        return JsonResponse::create([
            'status' => 'success',
            'result' => $result,
        ],
            200);
    }
}
