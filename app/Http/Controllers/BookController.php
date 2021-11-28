<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function masterPage(){
        return view('layouts.master');
    }
    public function homePage(){
        $category=$this->getAllCategories();
        $book=$this->getAllBookWithCategory();
        return view('pages.home',['category'=>$category,'book'=>$book]);
    }
    public function detailPage($id){
        $detail=$this->getDetailByBookId($id);
        $category=$this->getAllCategories();
        return view('pages.booksDetail',['bookDetail'=>$detail,'category'=>$category]);
    }
    public function categoryPage($id){
        $category=$this->getAllCategories();
        $book=$this->getAllBookByCategory($id);
        $categoryName=$this->getCategoriesName($id);
        return view('pages.category',['category'=>$category,'categoryName'=>$categoryName,'book'=>$book]);
    }
    public function contactPage(){
        $category=$this->getAllCategories();
        return view('pages.contact',['category'=>$category]);
    }
    public function getAllCategories(){
        return Category::all();
    }    
    public function getCategoriesName($id){
        return Category::where("category.id",$id)->first();
    }  
    public function getAllBookWithCategory(){
        return Book::join('details','books.id','=','details.book_id')
        ->select('books.id','books.title','details.author')
        ->get();
    }
    public function getAllBookByCategory($category){
        return Book::join('details','books.id','=','details.book_id')
        ->join('category','category.id','=','books.category_id')
        ->select('books.id','books.title','details.author')
        ->where("category.id",$category)
        ->get();
    }
    public function getDetailByBookId($id){
        return Book::join('details','books.id','=','details.book_id')
        ->select('books.id','books.title','details.author','details.publisher','details.year','details.description')
        ->where("books.id",$id)
        ->first();
    }
}
