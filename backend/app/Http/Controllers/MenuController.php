<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuList;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        //menuデータベースから名前を取得して表示する
        $menulists = MenuList::all();
        $menus = Menu::when(request("menu_id"), function($query, $menu_id){
            $query->where("menu_id", request("menu_id"));
        })->get();

        return view('menu', compact('menulists', 'menus'));
    }
}
