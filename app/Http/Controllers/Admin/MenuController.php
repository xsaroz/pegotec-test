<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Page;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menus'] = Menu::latest()->get();
        return view('dashboard.menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pages'] = Page::latest()->pluck('title', 'id');

        return view('dashboard.menu.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:menus',
            'page_id' => 'required|max:255|unique:menus',
        ]);

        try {
            $currentUserId = Auth::id();
            $data = $request->all();
            $data['user_id'] = $currentUserId;
            Menu::create($data);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('menus.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
         try {
            $data['pages'] = Page::latest()->pluck('title', 'id');

            $data['menu'] = Menu::find($id);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('dashboard.menu.edit', $data);
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
        $request->validate([
            'title' => 'required|max:255|unique:menus,title,' . $id,
            'page_id' => 'required|max:255|unique:menus,page_id,' . $id,
        ]);

        try {
            $currentUserId = Auth::id();
            $data = $request->all();
            $data['user_id'] = $currentUserId;
            Menu::find($id)->update($data);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('menus.index');
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
            Menu::find($id)->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->back();
    }
}
