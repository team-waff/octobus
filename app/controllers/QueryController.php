<?php

class QueryController {
    public function __construct() {}

    public function get($model, $data) {
        $model .= 'DAO';
        $model = ucfirst($model);
        $request = $this->generate_request($data);
        $params = $this->generate_params($data);
        $obj = new $model();
        return $obj->$request($params);
    }

    private function generate_request($data) {
        if(!$data) {
            return 'getAll';
        }
        return 'getById';
    }

    private function generate_params($data) {
        if($data[1]) {
            return $data[1];
        }
        return 0;
    }
}
