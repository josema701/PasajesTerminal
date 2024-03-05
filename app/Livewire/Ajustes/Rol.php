<?php

namespace App\Livewire\Ajustes;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Laravel\Jetstream\InteractsWithBanner;

class Rol extends Component
{
    use WithPagination, InteractsWithBanner;

    public $perPage=5, $search='', $permisos=[], $vista='lista', $name, $seleccionados=[], $rol_id;

    public function mount(){
        $this->permisos = Permission::all();
        // dd($this->permisos);
    }

    public function render()
    {
        $roles = Role::with('permissions')->where('name', 'LIKE', "%$this->search%")->paginate($this->perPage);
        return view('livewire.ajustes.rol', compact('roles'));
    }

    public function crear(){
        $this->vista = 'form';
    }

    public function guardar(){
        $this->validate([
            'name' => 'required|unique:roles,name',
            'seleccionados' => 'required|array|min:1'
        ]);
        // dd($this->seleccionados);

        $rol = Role::create(['name' => $this->name, 'guard_name' => 'web']); // , 'guard_name' => 'web'
        $rol->syncPermissions($this->seleccionados);
        $this->vista = 'lista';


        $this->reset(['name', 'seleccionados']);
        $this->banner('Estado creado exitosamente.!');
    }

    public function editar($param){
        $rol = Role::find($param);
        $this->rol_id = $rol->id;
        $this->name = $rol->name;
        $this->seleccionados = $rol->permissions->pluck('name')->toArray();
        $this->vista = 'form';
    }

    public function actualizar(){
        $this->validate([
            'name' => 'required|unique:roles,name,'.$this->rol_id,
            'seleccionados' => 'required|array|min:1'
        ]);

        $rol = Role::find($this->rol_id);
        $rol->update(['name' => $this->name]);
        $rol->syncPermissions($this->seleccionados);
        $this->vista = 'lista';

        $this->reset(['name', 'seleccionados', 'rol_id']);
        $this->banner('Estado actualizado exitosamente.!');
    }

    // cancelar
    public function cancelar(){
        $this->vista = 'lista';
        $this->reset(['name', 'seleccionados', 'rol_id']);
    }
}
