<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Page::latest()->get();
        return view('dashboard.page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.page.create');
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
            'title' => 'required|max:255|unique:pages',
            'slug' => 'required|max:255|unique:pages',
            'page_content' => 'required'
        ]);

        $currentUserId = Auth::id();

        $data = $request->all();

        try {
            $data['user_id'] = $currentUserId;

            Page::create($data);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        
        return redirect()->route('pages.index');

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
            $page = Page::find($id);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('dashboard.page.edit', compact('page'));
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
            'title' => 'required|max:255|unique:pages,title,' . $id,
            'slug' => 'required|max:255|unique:pages,slug,' . $id,
            'page_content' => 'required'
        ]);

        $currentUserId = Auth::id();

        $data = $request->all();

        try {
            $data['user_id'] = $currentUserId;

            Page::find($id)->update($data);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        
        return redirect()->route('pages.index');
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
            $page = Page::find($id);

            if ($page->menus) {
                dd('This Page is associated with a menu. So, it cannot be deleted');                
            } else {
                Page::find($id)->delete();
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->back();
    }
}
