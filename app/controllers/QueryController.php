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
        return 'getById';
    }

    private function generate_params($data) {
        return $data[1];
    }
}
