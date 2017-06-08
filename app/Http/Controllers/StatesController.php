<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
   public function all()
   {
   	$states = State::withTrashed()->get();
   	return view('all',compact('states'));    	
   }

   public function deleted()
   {
   	$states = State::onlyTrashed()->get();
    	return view('deleted',compact('states'));
   }

   public function active()
   {
   	$states = State::all();
    	return view('active',compact('states'));
   }

   public function deleteActive($id)
   {
   	$state = State::find($id);
		$state->delete();
    	return back();
   }

   public function forceDelete($id)
   {
   	$state = State::onlyTrashed()->where('id', $id)->get()->first();               
		$state->forceDelete();
    	return back();
   }
}