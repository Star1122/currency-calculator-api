<?php

namespace App\Repositories\Conversion;

use App\Models\Conversion;
use App\Repositories\BaseRepository;

class ConversionRepository extends BaseRepository implements ConversionRepositoryInterface
{
    /**
     * ConversionRepository constructor.
     *
     * @param Conversion $model
     */
    public function __construct(Conversion $model)
    {
        parent::__construct($model);
    }
}
