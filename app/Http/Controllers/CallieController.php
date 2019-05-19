<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Type;
class CallieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::where("deleted",0)->where("active",1)->inRandomOrder()->take(5)->get();
        $articles = Article::where("categories_id",3)->where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(1)->get();
        $articlescat = Article::where("categories_id",5)->where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(1)->get();
        $articlesgroup = Article::where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        $items= Article::where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(3)->get();
        $categories= Category::where("deleted",0)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        $Artitems= Article::where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(6)->get();
        return view('home',compact('sliders','articles','articlescat','articlesgroup','items','categories','Artitems'));
    }
    public function contact()
    {
        $Artitems= Article::where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(6)->get();
        $categories= Category::where("deleted",0)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        return view('home.contact',compact('categories','Artitems'));
    }
    public function welcome()
    {
        return view('home.welcome');
    }
   
    public function articles(Request $request)
    {
        $category=$request->category;
        $catName=Category::where("id",$category)->get();
        //dd( $catName);
        $categories= Category::where("deleted",0)->inRandomOrder()->orderBy('id','desc')->get();
        $Artitems= Article::where("deleted",0)->where("categories_id",$category)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        $latest=Article::where("deleted",0)->where("categories_id",$category)->where("published",1)->orderBy('id','desc')->take(1)->first();
        $latestitems= Article::where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        return view("home.articles", compact("categories","Artitems","latest","catName","latestitems"));
        //$categories= Category::where("deleted",0)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        //return view('home.category',compact('categories'));
    }
    public function article($id)
    { 
        $Artitems= Article::where("deleted",0)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(4)->get();
        $categories= Category::where("deleted",0)->inRandomOrder()->orderBy('id','desc')->get();
        //$item= Article::where("deleted",0)->where("id", $id)->where("published",1)->inRandomOrder()->orderBy('id','desc')->take(1)->get();
        //dd($item);
        $item = Article::find($id);
        if(!$item || $item->deleted || !$item->published){
            return redirect(route("home"));
        }
       $otherArticles = Article::where('deleted',0)
            ->where('published',1)
            ->where('id','!=',$id)
            ->orderBy('id','desc')
            ->take(3)->get();
       // return view('home.article')->withItem($item)->withArticles($otherArticles);
        return view('home.article',compact('categories','Artitems','item','otherArticles'));
    }
}
