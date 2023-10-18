<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $websites = Website::where('status', '!=', 'admin')->latest()->get();
            $count = 1;
            // dd($users);
            return view('backend.website.index', compact('websites', 'count'));
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {

            return view('backend.website.create');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'url' => 'required',
            'status' => 'required'

        ];

        $custommessage = [];

        $this->validate($request, $rules, $custommessage);
        try {
            $data = $request->all();
            unset($data['_token']);
            Website::create($data);
            return redirect()->back()->with('success', 'Website Added Success');
            // dd($request->all());
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $users = User::where('role', '!=', 'admin')->latest()->get();
            $count = 1;

            // dd($users);
            return view('backend.user.create', compact('users', 'count'));
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $website = Website::find($id);
            // dd($users);
            return view('backend.website.edit', compact('website'));
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
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
        $rules = [
            'name' => 'required',
            'url' => 'required',
            'status' => 'required'
        ];

        $custommessage = [];

        $this->validate($request, $rules, $custommessage);
        try {
            $data = $request->all();
            unset($data['_token']);
            $website = Website::find($id);
            $website->update($data);
            return redirect()->back()->with('success', 'Website Updated Success');
            // dd($request->all());
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // dd($id);
            Website::destroy($id);
            return redirect()
                ->back()
                ->with('success', 'Website Deleted.');
        } catch (\Exception $th) {
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }
}
