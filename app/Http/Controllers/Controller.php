<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Traits\MediaTrait;

class Controller extends BaseController
{
    use MediaTrait;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
