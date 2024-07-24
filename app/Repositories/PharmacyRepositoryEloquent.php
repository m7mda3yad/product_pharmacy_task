<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PharmacyRepository;
use App\Entities\Pharmacy;
use App\Validators\PharmacyValidator;

/**
 * Class PharmacyRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PharmacyRepositoryEloquent extends BaseRepository implements PharmacyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pharmacy::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PharmacyValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
