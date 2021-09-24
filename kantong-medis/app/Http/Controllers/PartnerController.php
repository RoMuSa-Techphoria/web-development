<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.pages.partner.index', ['partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        $input = $request->validated();

        $input['image'] = '';

        $image = $request->image;
        if ($image) {
            $request->validate(['image' => ['image']]);
            $destinationPath = 'images/partner';
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $input['image'] = $image->storeAs($destinationPath, $name, 'public');
        }

        Partner::create($input);

        return redirect()->route('partner.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.pages.partner.update', ['partner' => $partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request, Partner $partner)
    {
        $input = $request->validated();

        $image = $request->image;
        if ($image) {
            Storage::disk('public')->delete($partner->image);
            $destinationPath = 'images/partner';
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $input['image'] = $image->storeAs($destinationPath, $name, 'public');
        }

        $partner->update($input);
        return redirect()->route('partner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partner.index');
    }
}
