<?php

class Router {
    public function __construct($req_uri, $get = null, $post = null) {
        $this->models = ['accountable', 'child', 'ride', 'track', 'course'];
        $this->bypass = ['octobus', 'app', '', 'www', 'test', 'hackaton'];
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

        } else if ($parsed_uri[0] == 'doc'){

            echo 'doc.html';
            return 0;
        } else {
            echo json_encode(false);
        }
    }

    private function initDao() {
        $dao = $this->model.'DAO';
        $this->dao = new $dao();
    }


    public function get($model, $data) {

        $this->model = ucfirst($model);
        $this->initDao();
        $request = $this->generate_request($data);
        $params = $this->generate_params($data);
        var_dump($params, $request,$this->model);
        if(!$params) {
            return $this->dao->$request();
        }
        return $this->dao->$request($params['id'], $params);
    }

    private function generate_request($data) {
        if($this->post) {
            return 'add';
        }

        if($data) {
            if((int)$data[0]) {
                return 'getById';
            }
        }
        return 'getAll';
    }

    private function generate_params($data) {
        $params = array();
        if(count($data) > 0) {
            if((int)$data[0]) {
                $params['id'] = (int)$data[0];
            }
        }
        if ($this->get) {
            foreach($this->get as $key => $value) {
                $params[$key] = $value;
            }
        }
        return $params;
    }

}
