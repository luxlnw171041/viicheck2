<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Dealer;
use Illuminate\Http\Request;

class DealersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $dealers = Dealer::where('name_dealers', 'LIKE', "%$keyword%")
                ->orWhere('province', 'LIKE', "%$keyword%")
                ->orWhere('dealers', 'LIKE', "%$keyword%")
                ->orWhere('isuzu_all', 'LIKE', "%$keyword%")
                ->orWhere('pickup_and_multipurpose', 'LIKE', "%$keyword%")
                ->orWhere('paint_and_body', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('latitude', 'LIKE', "%$keyword%")
                ->orWhere('longitude', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $dealers = Dealer::latest()->paginate($perPage);
        }

        return view('dealers.index', compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dealers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        Dealer::create($requestData);

        return redirect('dealers')->with('flash_message', 'Dealer added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $dealer = Dealer::findOrFail($id);

        return view('dealers.show', compact('dealer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dealer = Dealer::findOrFail($id);

        return view('dealers.edit', compact('dealer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        $dealer = Dealer::findOrFail($id);
        $dealer->update($requestData);

        return redirect('dealers')->with('flash_message', 'Dealer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Dealer::destroy($id);

        return redirect('dealers')->with('flash_message', 'Dealer deleted!');
    }
}
