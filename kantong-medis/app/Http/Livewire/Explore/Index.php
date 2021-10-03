<?php

namespace App\Http\Livewire\Explore;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $services = Service::all();

        return view('livewire.explore.index', ['services' => $services])
            ->extends('layouts.app');
    }
}
