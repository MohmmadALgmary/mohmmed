<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $categories = Category::where('status' , 'active')->take(3)->get();
        $sliders = Slider::take(3)->get();
        $articles = Article::orderBy('id' , 'desc')->take(3)->get();
        return response()->view('news.index' , compact('categories' , 'sliders' , 'articles'));
    }
    public function home2(){

        $categories = Category::where('status' , 'active')->take(3)->get();
        $sliders = Slider::take(3)->get();
        // $articles = Article::orderBy('id' , 'desc')->take(3)->get();
        return response()->view('chalets.index', compact('categories', 'sliders' ));
    }


    public function all($id){
        $categories = Category::findOrFail($id);
        $articles = Article::where('category_id' , $id)->paginate(4);
        return view('news.all-news' , compact('categories' , 'articles'));
    }

    public function detailes($id){

        $articles = Article::findOrFail($id);
        // $categories = Category::with('articles')->get();
        return view('news.newsdetailes' , compact('articles' ));
    }

    public function showContact(){
        return view('news.contact');
    }

    public function storeContact(Request $request){
        $validator = Validator($request->all() ,[

            ] ,[

            ]);

            if(! $validator->fails()){

                $contacts = new Contact();
                $contacts->fullname = $request->get('fullname');
                $contacts->mobile = $request->get('mobile');
                $contacts->email = $request->get('email');
                $contacts->message = $request->get('message');

                $isSaved = $contacts->save();

                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Created is Successfully' ,

                ] , 200);

            }
            else{
                return response()->json([
                    'icon' => 'error' ,
                    'title' => $validator->getMessageBag()->first(),
                ] , 400);
            }

        }

    }
