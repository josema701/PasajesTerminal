<?php

namespace App\Livewire\Ajustes;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Laravel\Jetstream\InteractsWithBanner;

class Permiso extends Component
{
    use WithPagination, InteractsWithBanner;

    public $perPage=5, $search='', $vista='lista';

    public function render()
    {
        $permisos = Permission::with('permissions')->where('name', 'LIKE', "%" . $this->search . "%")->paginate($this->perPage);

        return view('livewire.ajustes.permiso', compact('permisos'));
    }
}
