<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $pageArticles = [
        ['id'=> 0, 'title'=>'Tagliaerba', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 1, 'title'=>'Divano', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 2, 'title'=>'Televisore', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 3, 'title'=>'Cappotto', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 4, 'title'=>'Tapis-Roulant', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 5, 'title'=>'Pettine', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 6, 'title'=>'Avvitatore', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 7, 'title'=>'Scacchiera', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
        ['id'=> 8, 'title'=>'Fanale', 'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa...'],
    ];
    public function view(){
        $pageArticles=$this->pageArticles;
        return view('articles', compact('pageArticles'));
    }

    public function show($id){
        if(array_key_exists($id,$this->pageArticles)){
            $pageArticle = $this->pageArticles[$id];
            return view('article',compact('pageArticle'));
        
        }else{        
            abort(404);
        }
    }
}
