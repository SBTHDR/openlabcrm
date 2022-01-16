<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePageRequest $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->validated());

        return redirect()->route('admin.pages.edit', $page)->with('message', 'Page Updated Successsfully!');
    }
}
