<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Events\WebSocketDemoEvent;

class MainController extends Controller{


public function index(){
  // broadcast(new WebSocketDemoEvent('some data'));
  return view('welcome');
  }
}
