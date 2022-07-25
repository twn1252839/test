<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function hello()
  {
    return 'welcome';
  }

  public function home()
  {
    return 'home';
  }

  public function showUser($id = 1)
  {
    return 'showUsere: ' . $id;
  }

  public function showUser2($id)
  {
    return 'showUser2: ' . $id;
  }

  public function add($x, $y)
  {
    return $x . '+' . $y . '=' . $x + $y;
  }

  public function gamer()
  {
    // game.blade.php (在php裡面會有blade語言編譯) 所以不用打blade
    // return view('game');

    // view 寫法 第一種
    // return view('頁面', ['變數' => '值']);
    //return view('game', ['name' => 'James']);
    // view 寫法 第二種
    // return view('game')->with('name', 'James');
    // view 寫法 第三種 (compact 不用$字號) 老師推薦各種陣列
    // {!!$name!!} 搭配
    // $name = '<span style="color: red;">James</span>';
    // $name = 'James';
    $name = ['name', 'James'];
    return view('game', compact('name'));
  }

  public function show()
  {
    return view('users.show');
  }

  public function edit()
  {
    return view('users.edit');
  }

  public function index()
  {
    $items = ['name', 'James', 'edit'];
    // $items = [];
    return view('users.index', compact('items'));
    // return view('users.index');
  }
  public function index1()
  {
    return view('users.index1');
  }
  public function index2()
  {
    return view('users.index2');
  }
}