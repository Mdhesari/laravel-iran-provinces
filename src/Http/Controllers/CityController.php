<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Mdhesari\LaravelCountryStateCities\Models\City;
use Mdhesari\LaravelCountryStateCities\Models\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Get all cities of a specific Province
     *
     * @param Request $request
     * @param Province $province
     * @return JsonResponse
     * @group Province-Cities
     */
    public function index(Request $request, Province $province): JsonResponse
    {
        $query = $province->cities();

        if ($request->has('s')) {
            $query->where('name', 'like', '%' . $request->get('s') . '%');
        }

        return api()->success(null, [
            'items' => $query->paginate($request->get('per_page', 16)),
        ]);
    }

    /**
     * Get the specified city
     *
     * @param City $city
     *
     * @return JsonResponse
     * @group Province-Cities
     */
    public function show(City $city): JsonResponse
    {
        return api()->success(null, [
            'items' => $city,
        ]);
    }
}
