<?php

class Router {

    public function __construct($req_uri, $get = null, $post = null) {
        $this->models = ['accountable', 'child', 'ride'];
        $this->bypass = ['octobus', 'app', '', 'www', 'test'];
        $this->get = $get;
        $this->post = $post;
        $this->req_uri = $req_uri;
        $this->sanitizeUrl($this->req_uri);
    }

    public function sanitizeUrl() {
        $split_uri = explode('/', $this->req_uri);
        $parsed_uri = array();

        foreach ($split_uri as $v) {
            if(!in_array($v, $this->bypass)) {
                array_push($parsed_uri, $v);
            }
        }

        if(in_array($parsed_uri[0], $this->models)) {
            $model = $parsed_uri[0];
            array_shift($parsed_uri);
            echo json_encode($this->get($model, $parsed_uri));
        } else {
            echo json_encode(false);
        }
    }

    public function get($model, $data) {
        $this->model = ucfirst($model);
        $dao = $model.'DAO';
        $request = $this->generate_request($data);
        $params = $this->generate_params($data, $get, $post);
        $this->dao = new $dao();

        if(!$params) {
            return $this->dao->$request();
        }

        return $this->dao->$request($params);
    }

    private function generate_request($data) {
        if($data) {
            if((int)$data[0]) {
                return 'getById';
            } else {
                return 'getWhere';
            }
        }
        return 'getAll';
    }

    private function generate_params($data) {
        if(count($data) > 0) {
            if((int)$data[0]) {
                return $data[0];
            }
        }
        return 0;
    }


}
