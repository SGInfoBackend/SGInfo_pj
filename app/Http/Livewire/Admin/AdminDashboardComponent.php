<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        dd('is working');
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
    }
}
