<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Account;

class RegisController extends Controller
{
    public function register(){
        return view('register');
    }
    public function redirectToLeaderPage(){

        return view('leader');
    }

    public function createAccount(Request $request){
        Account::create([
            'team_name' => $request -> team_name_input,
            'password' => $request -> password_input,
        ]);
        return redirect('/leader-informations');
    }

    public function createInformations(Request $request){
        // dd($request);
        $path = $request->file('CV_img_input');
        $path2 = $request->file('card_img_input');
        // $path = $request->file('CV_img_input')->storeAs('CVimage',
        // $request->user()->id);
        // $path2 = $request->file('card_img_input')->storeAs('Cardimage',
        // $request->user()->id);
        $register = Register::create([
            'team_name' => $request -> team_name_input,
            // 'password' => $request -> password_input,
            'full_name'=> $request -> full_name_input,
            'email' => $request -> email_input,
            'WA_num' => $request -> WA_num_input,
            'line_ID' => $request -> line_ID_input,
            'git_ID' => $request -> git_ID_input,
            'birth_place' => $request -> birth_place_input,
            'birth_date' => $request -> birth_date_input,
            'CV_img_path' => $path,
            'card_img_path' => $path2
        ]);

        $fileName=$register->id.$path->getClientOriginalName();
        $path->storeAs('public/image_CV', $fileName);
        $register->CV_img_path='image_CV/'.$fileName;
        $register->save(); 
        $fileName2=$register->id.$path2->getClientOriginalName();
        $path2->storeAs('public/image_card', $fileName2);
        $register->card_img_path='image_card/'.$fileName2;
        $register->save(); 

        return redirect('/');
        //insert data in to database php myadmin
    }
}
