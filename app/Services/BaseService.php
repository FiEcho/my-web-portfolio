<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Response;


class BaseService
{
     /**
     * @param $success
     * @param  null  $message
     * @param  null  $data
     * @param  int  $statusCode
     * @return object
     */
    public function response($success,$messages = null,$data = null,int $codeStatus = Response::HTTP_OK) : object
    {
        return (object)[
            'success' => $success,
            'messages' => $messages,
            'data' => $data,
            'code' => $codeStatus,
        ];
    }
}