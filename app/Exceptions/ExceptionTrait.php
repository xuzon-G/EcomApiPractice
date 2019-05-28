<?php
namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
/**
 *
 */
trait ExceptionTrait
{
    public function apiException($request,$e)
    {
        if ($e instanceof ModelNotFoundException) {
            return response()->json(['errors'=>"model not found"], 204);
            }


            if ($e instanceof NotFoundHttpException) {
                return response()->json(['errors'=>"Invalid Route"], 404);
                }


    }

}

?>
