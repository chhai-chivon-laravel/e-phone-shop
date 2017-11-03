<?php
/**
 * Created by PhpStorm.
 * User: chhaichivon
 * Date: 11/3/17
 * Time: 8:19 AM
 */

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index(){
        return  view("index");
    }
}