<?php

namespace App\Http\Controllers;

use App\Models\ProductSale;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index (){
      return view("customers",[
          "users" => User::all()->sortBy("name")
      ]);
  }

  public function update(User $user){
      $user->update([
          "cell"=>request('cell'),
          "email"=>request('email'),
          "name"=>request('name'),
          ]
      );

  return redirect(route("user.index"));
  }

  public function edit(User $user){
      return view("edit_customer",[
      "user"=>$user]
      );
  }

}

