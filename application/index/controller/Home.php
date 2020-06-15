<?php
namespace app\index\controller;
use app\index\controller\Base;
class Home extends Base
{
    public function index()
    {
        return $this -> view -> fetch();
    }
    
    public function map()
    {
        return $this -> view -> fetch();
    }

    public function aboutus()
    {
        return $this -> view -> fetch();
    }

    public function myserver()
    {
        return $this -> view -> fetch();
    }

    public function industry()
    {
        return $this -> view -> fetch();
    }
    public function knowledge()
    {           
        return $this -> view -> fetch();
    }

    public function freightbasis()
    {
        return $this -> view -> fetch();
    }


    public function contact()
    {
        return $this -> view -> fetch();
    }

    public function repair()
    {
        return $this -> view -> fetch();
    }

    public function renovate()
    {
        return $this -> view -> fetch();
    }

    public function curing()
    {
        return $this -> view -> fetch();
    }

    public function recovery()
    {
        return $this -> view -> fetch();
    }

    public function carry()
    {
        return $this -> view -> fetch();
    }

    public function industrydetail($detail)
    {
        return $this -> view -> fetch("industrydetail-".$detail);
    }

    public function knowledgedetail($detail)
    {
        return $this -> view -> fetch("knowledgedetail-".$detail);
    }
}
