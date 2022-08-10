<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;
use App\Models\book;
use App\Models\borrow;
use App\Models\shelf;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class booksController extends Controller
{
    function genre()
    {
        $data = genre::all();

        return view('genre')->with('genres',$data);
    }

    function booklist()
    {
        $data = book::all();
       // var_dump($data);
        return view('booklist')->with('books',$data);
    }

    function bookByGenre($id)
    {
       
        
        $books = DB::table('books')
        ->join('genres','genres.id', '=', 'books.genre_ID')
        ->where('books.genre_ID','=', $id)
        ->select('books.*')
        ->get();

        return view('book',['books'=>$books]);

    }

    function detail($id){
       // dd($id);
        $data = book::find($id);
       // dd($data);
        return view('detail')->with('books',$data);
    }
       
    function addToShelf(Request $req)
    {
        if($req->session()->has('user'))
        {
            $shelf = new shelf();
            
            $shelf->user_ID = $req->session()->get('user')['id'];
            $shelf->book_ID = $req->book_id;
            $shelf->save();

            return redirect('genre');
        }
        else
        {
            return redirect('login');
        }
    }  

    function search(Request $req)
    {
       
        $data = book::Where('title', 'like' , '%' .$req->input('query'). '%')
                    ->orWhere('genre','like','%' .$req->input('query'). '%')
                    ->orWhere('author','like','%' .$req->input('query'). '%')
                    ->orWhere('description','like','%' .$req->input('query'). '%')
                    ->get();

        return view('search',['books'=>$data]);
    }
 
    static function shelfbooks()
    {
        $user_id = session()->get('user')['id'];
        return shelf::where('user_id',$user_id)->count();
    }

    function shelflist()
    {

        $user_id = session()->get('user')['id'];

        $books = DB::table('shelf')
        ->join('books','shelf.book_ID','=','books.id')
        ->where('shelf.user_ID',$user_id)
        ->select('books.*' ,'shelf.id as shelf_id')
        ->get();

        return view('shelflist',['books'=>$books]);
    }

    function removeshelf($id)
    {
        shelf::destroy($id);
        return redirect('shelflist');
    }

    function borrow(){

        $user_id = session()->get('user')['id'];

       $count  = DB::table('shelf')
        ->join('books','shelf.book_id','=','books.id')
        ->where('shelf.user_id',$user_id)
        ->count('books.id');

        return view('borrow',['count'=>$count]);

    }

    function borrowplace()
    {
        $user_id = session()->get('user')['id'];
        $allshelf = shelf::where('user_id',$user_id)->get();
        
        foreach($allshelf as $shelf)
        {
            $borrow = new borrow;

            $borrow->book_id = $shelf['book_ID'];
            $borrow->user_id = $shelf['user_ID'];
            $borrow->status = "borrowed";
           
            $borrow->save();

            shelf::where('user_id',$user_id)->delete();
            return redirect('booklist');
        }
        
    }
    
    function myborrowals()
    {
        $user_id = session()->get('user')['id'];

      $borrowals = DB::table('borrow')
        ->join('books','borrow.book_id','=','books.id')
        ->where('borrow.user_id',$user_id)
        ->get();

        return view('myborrowals',['borrowals'=>$borrowals]);

    }  

    static function borrowbooks()
    {
        $user_id = session()->get('user')['id'];
        return borrow::where('user_id',$user_id)->count();
    }

    function return($id)
    {
        borrow::destroy($id);
        return redirect('myborrowals');
    }

}


