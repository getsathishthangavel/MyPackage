<?php

namespace jiit\MyPackage;

use Illuminate\Routing\Controller;
use jiit\MyPackage\MyPackage;

class MypackageController extends Controller
{

    public function index()
    {
        echo "called";
        return MyPackage::multiply(4, 4);
    }
 }