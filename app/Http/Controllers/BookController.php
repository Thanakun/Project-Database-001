<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * compact of product
     */
    public function index()
    {
        $books = Book::all();
        return view('home.index', compact('books'));
    }


    /**
     * Display a listing of all products in the cart.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function cart()
    {
        $owner_id = Auth::id();
        $carts = DB::table('carts')
            ->where('owner_id',$owner_id)
            ->get();

        return view('cart',['carts'=>$carts]);
    }

    /**
     * Remove the product from cart
     *
     * @param cart id
     * 
     * @return \Illuminate\Http\Response
     * 
     */    
    public function remove($ISBN)
    {
        // find the cart by id
        // carts have lots of (mini)cart which has one type of product
        $cart = Cart::findOrFail($ISBN);

        // find the product which has same name with product in the cart
        $book = Book::where('name', '=', $cart->name)->first();


        \DB::transaction(function () use($book, $cart){

            // return products in the cart to stock
            $book->stock = $book->stock + $cart->quantity ;
            $book->save();

            // delete the cart
            $cart->delete();
        });

        // flash a message popup
        session()->flash('flash_dlt_msg', 'Product removed successfully');

        return back()->with('success', 'Product removed successfully');
    }

    /**
     * Add the product from cart
     *
     * @param product id
     * 
     * @return \Illuminate\Http\Response
     * 
     */    
    public function addToCart($ISBN)
    {
        
        if(!Auth::user()){
            return view('home.index');
        }
        
        // find product by ISBN
        $book = Book::findOrFail($ISBN);

        // find the cart which has product that has same name with the selected product
        $cart = Cart::where([
            'name' => $book->name,
            'owner_id' => Auth::id()
            ])->first();

        \DB::transaction(function () use($book,$cart){

        // if the cart already has selected product
        // the cart's quantity + 1
        if($cart != null) {
            $cart->quantity = $cart->quantity+1;
            $cart->save();
        } 
        // else add new cart
        else {
            $cart = new Cart();
            $cart->name = $book->name;
            $cart->books_ISBN = $book->ISBN;
            $cart->quantity = 1;
            $cart->price = $book->price;
            $cart->image = $book->cover;
            $cart->owner_id = Auth::id();
            $cart->save();
        }

        // for both case, remove one product from stock
        $book->stock = $book->stock-1 ;
        $book->save();
        });

        // flash a message popup
        session()->flash('flash_msg', 'Product added to cart successfully!');

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ISBN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
