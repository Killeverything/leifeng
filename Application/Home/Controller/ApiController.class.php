<?php
namespace Home\Controller;
use Think\Controller;
class ApiController extends Controller {
    public function index(){
        
    }

    public function login(){
    	$username = trim(I('username'));
    	$password = trim(I('password'));
    }
}