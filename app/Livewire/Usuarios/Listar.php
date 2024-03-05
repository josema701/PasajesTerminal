<?php

namespace App\Livewire\Usuarios;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Laravel\Jetstream\InteractsWithBanner;

class Listar extends Component
{

    use WithPagination, InteractsWithBanner;

    public $perPage=5, $search='', $vista='lista';

    public function render()
    {
        $usuarios = User::where('name', 'LIKE', "%$this->search%")
                        ->orWhere('email', 'LIKE', "%$this->search%")
                        ->orWhere('telefono', 'LIKE', "%$this->search%")
                        ->orWhere('documento', 'LIKE', "%$this->search%")
                        ->paginate($this->perPage);

        return view('livewire.usuarios.listar', compact('usuarios'));
    }
}
