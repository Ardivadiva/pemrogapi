<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

class RestfulController extends REST_Controller
{
    protected $format = 'json';

    protected function responseHasil($code, $status, $data)
    {
        $this->response([
            'code' => $code,
            'status' => $status,
            'data' => $data
        ], 200);
    }
}
