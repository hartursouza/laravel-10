<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }

    public function create() 
    {
        return view('admin/supports/create');
    }

    public function store() 
    {
        $data = request()->validate([
            'subject' => 'required',
            'body' => 'required'
        ]);

        Support::create($data);

        return redirect()->route('supports.index');
    }

    public function show(string|int $id) 
    {
        if (!$support = Support::findOrFail($id)) {
            return back();
        }

        return view('admin/supports/show', compact('support'));
    }

    public function edit(Support $support, string|int $id) 
    {
        if(!$support = $support->findOrFail($id)) {
            return back();
        }

        return view('admin/supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, string|int $id) 
    {   
        if (!$support = $support->findOrFail($id)) {
            return back();
        }

        $support->update($request->only([
            'subject',
            'body'
        ]));

        return redirect()->route('supports.index');
    }

    public function destroy(string|int $id) 
    {
        if(!$support = Support::findOrFail($id)) {
            return back();
        }

        $support->delete();

        return redirect()->route('supports.index');
    }

}
