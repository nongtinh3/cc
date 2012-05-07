<?php
require_once APPPATH .'third_party/seeker_controller'.EXT;
    class Demo extends Seeker_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        function index()
        {
            echo "xin chao";
        }
        
    }
?>