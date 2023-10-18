<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('backend/home');
    }

    public function fetchformdata(){
        // dd(request()->get('name'), request()->get('value'),request()->get('unique'),request()->get('page_url'),request()->get('form_action'),);

        $name = request()->get('name');
        $value = request()->get('value');
        $formclass = request()->get('unique');
        $formaction = request()->get('form_action');
        $url = request()->get('page_url');

        $checkexistance = AllWebFormdataJs::where(['formclass' => $formclass])->first();
        if ($checkexistance) {
            # code...
            $inputvalue = json_decode($checkexistance->inputvalue, true);
            // dd($inputvalue, array_key_exists($name, $inputvalue), $value, $inputvalue[$name]);
            if (array_key_exists($name, $inputvalue)) {
                # code...
                $inputvalue[$name] = $value;
            } else {
                # code...
                $inputvalue[$name] = $value;

            }
            

            $data = [];
            $data['inputvalue'] = json_encode($inputvalue);
            $data['formaction'] = $formaction;
            $data['url'] = $url;
            $data['formclass'] = $formclass;
            $checkexistance->update($data);
            return redirect()->response()->json(['success' => true]);
            
        } else {
            # code...
            $data = [];
            $data['inputvalue'] = json_encode([$name => $value]);
            $data['formaction'] = $formaction;
            $data['url'] = $url;
            $data['formclass'] = $formclass;
            AllWebFormdataJs::create($data);
            return redirect()->response()->json(['success' => true]);

        }
        
    }
}
