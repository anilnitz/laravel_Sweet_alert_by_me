<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
/*---------------for facade validation-------------------------------*/
use Illuminate\Support\Facades\Validator;

use App\Form;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function post(Request $req)
    {
    	 /*$validatedData = $req->validate([
        'email' => 'required|min:3|max:255|email',
        'password' => 'required|min:3',
    ]);*/

   $validator= Validator::make($req->all(),[
    	'email' => 'required|min:3|max:255|email',
        'password' => 'required|min:3',
    ]);
    if ($validator->fails()) {
    	/*dd($validator->messages()->all()[0]);*/
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
    }
    $task = Form::create($req->all());
    return redirect('abc')->with('success', 'Task Created Successfully!');
    	/*dd($req->input());*/
    }
}
