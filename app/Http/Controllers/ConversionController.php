<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConversionCreateRequest;
use App\Http\Resources\ConversionResource;
use App\Models\Conversion;
use App\Repositories\Conversion\ConversionRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConversionController extends Controller
{
    private $conversionRepository;

    /**
     * ConversionController constructor.
     *
     * @param ConversionRepositoryInterface $conversionRepository
     */
    public function __construct(ConversionRepositoryInterface $conversionRepository) {
        $this->conversionRepository = $conversionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response([
            'conversions' => ConversionResource::collection($this->conversionRepository->all()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ConversionCreateRequest $request
     * @return Response
     */
    public function store(ConversionCreateRequest $request): Response
    {
        $data = $request->validated();

        $data['ip'] = $request->ip();
        $conversion = $this->conversionRepository->create($data);

        return response([
            'conversion' => new ConversionResource($conversion),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Conversion $conversion
     * @return Response
     */
    public function show(Conversion $conversion): Response
    {
        return response([
            'conversion' => new ConversionResource($conversion),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Conversion $conversion
     * @return Response
     */
    public function update(Request $request, Conversion $conversion): Response
    {
        // TODO: update if needed later
        return response([
            'errors' => ['Forbidden.'],
        ], 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Conversion $conversion
     * @return Response
     */
    public function destroy(Conversion $conversion): Response
    {
        // TODO: update if needed later
        return response([
            'errors' => ['Forbidden.'],
        ], 403);
    }
}
