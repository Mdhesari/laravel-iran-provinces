<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Mdhesari\LaravelCountryStateCities\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Get all countries
     *
     * @param Request $request
     * @return JsonResponse
     * @group Province-Cities
     */
    public function index(Request $request): JsonResponse
    {
        $query = Province::query();

        if ( $request->has('s') ) {
            $query->where('name', 'like', '%'.$request->get('s').'%');
        }

        return api()->success(null, [
            'items' => $query->paginate($request->get('per_page', 16)),
        ]);
    }

    /**
     * Get the specified country
     *
     * @param Province $province
     * @return JsonResponse
     * @group Province-Cities
     */
    public function show(Province $province): JsonResponse
    {
        return api()->success(null, [
            'items' => $province,
        ]);
    }
}
