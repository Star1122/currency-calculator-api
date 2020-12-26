<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class ConversionRateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $response = Http::get('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');

        if ($response->status() == 200) {
            return response([
                'rates' => $response->body(),
            ]);
        }

        return response([
            'rates' => '',
        ]);
    }
}
