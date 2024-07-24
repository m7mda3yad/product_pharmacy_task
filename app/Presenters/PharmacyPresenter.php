<?php

namespace App\Presenters;

use App\Transformers\PharmacyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PharmacyPresenter.
 *
 * @package namespace App\Presenters;
 */
class PharmacyPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PharmacyTransformer();
    }
}
