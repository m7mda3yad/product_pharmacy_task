<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Pharmacy;

/**
 * Class PharmacyTransformer.
 *
 * @package namespace App\Transformers;
 */
class PharmacyTransformer extends TransformerAbstract
{
    /**
     * Transform the Pharmacy entity.
     *
     * @param \App\Entities\Pharmacy $model
     *
     * @return array
     */
    public function transform(Pharmacy $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
