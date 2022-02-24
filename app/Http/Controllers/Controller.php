<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    
    /**
     * 
     * data to return if response is a success response.
     * 
     * @param array $data Data to return.
     * @param int   $code Response Code.
     */ 
    public function success( $data = [], $code = 200 )
    {
        return response( $data )->setStatusCode( $code );
    }
}
