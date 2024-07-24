<?php
namespace App\Http\Traits;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait GeneralTrait
{
    public function returnError($code, $msg)

    {
      return response()->json([
        'status' => false,
        'code' => $code,
        'msg' => $msg
      ]);
    }

    public function returnNotFound($data=null)
    {
      return response()->json([
        'status' => false,
        'code' => 204,
        'msg' => $data??  trans('response.not_found')
      ]);
    }

    public function returnValidationErrorsData($errors)
    {
      return response()->json([
        'status' => false,
        'code' => 422,
        'message' => 'Validation errors',
        'errors' => $errors
      ]);

    }


    public function returnSuccessMessage($msg =  ""){
      return [
        'status' => true,
        'code' => 201,
        'msg' => $msg
      ];
    }


public function returnData($data, $msg = "")
    {
      return response()->json([
        'status' => true,
        'code' => 200,
        'msg' => $msg,
        'data' => $data
      ]);
    }

public function returnDataPaginate($data, $msg = "")
    {
      return response()->json([
        'status' => true,
        'code' => 200,
        'msg' => $msg,
        'paginate' => $data
      ]);
    }


    //////////////////
    public function returnValidationError($code = "E001", $validator)
    {
      return $this->returnError($code, $validator->errors()->first());
    }


    public function returnCodeAccordingToInput($validator)
    {
      $inputs = array_keys($validator->errors()->toArray());
      $code = $this->getErrorCode($inputs[0]);
      return $code;
    }

}
