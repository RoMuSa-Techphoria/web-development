<?php

namespace App\Http\Livewire\Explore;

use App\Models\Partner;
use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $partner = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'partner' => ['except' => '']
    ];

    public function render()
    {
        // $services = Service::where('id', 1)->first();
        $services = $this->partner ? Service::where('name', 'like', "%$this->search%")->where('partner_id', $this->partner)->get() :
            Service::where('name', 'like', "%$this->search%")->get();

        $partners = Partner::all();

        return view('livewire.explore.index', ['services' => $services, 'partners' => $partners])
            ->extends('layouts.app');
    }
}
