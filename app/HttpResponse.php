<?php

namespace App;

trait HttpResponse
{
    public function success($data = [], $message , $statusCode = 200)
       {
             return response()->json([
                 'Status' => 'Successfully',
                 'Message' => $message,
                 'Data' => $data
             ], $statusCode);
       }

       public function error( $message , $statusCode = 400)
       {
             return response()->json([
                 'Status' => 'Error',
                 'Message' => $message,
             ], $statusCode);
       }
}
