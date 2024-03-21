<?php

namespace App\Livewire\Ajustes;

use Livewire\Component;
use App\Models\Ciudades;
use Livewire\WithPagination;
use Laravel\Jetstream\InteractsWithBanner;
use App\Models\Terminales as TerminalesModel;

class Terminales extends Component
{
    use WithPagination, InteractsWithBanner;
    public $perPage=5, $vista = 'lista', $search='', $seleccionado, $ciudades=[];

    public $nombre, $direccion, $telefono, $estado = true, $ciudad_id;

    public function mount()
    {
        $this->ciudades = Ciudades::where('estado', true)->get();
    }

    public function render()
    {
        $terminales = TerminalesModel::where('nombre', 'LIKE', "%" . $this->search . "%")
                                    ->orWhere('direccion', 'LIKE', "%" . $this->search . "%")
                                    ->orWhere('telefono', 'LIKE', "%" . $this->search . "%")
                                    ->paginate($this->perPage);

        return view('livewire.ajustes.terminales', compact('terminales'));
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->vista = 'form';
        $this->reset(['nombre', 'direccion', 'telefono', 'estado', 'ciudad_id']);
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'direccion' => 'nullable',
            'telefono' => 'nullable',
            'estado' => 'required',
            'ciudad_id' => 'required',
        ]);

        $item = new TerminalesModel();
        $item->nombre = $this->nombre;
        $item->direccion = $this->direccion;
        $item->telefono = $this->telefono;
        $item->estado = true;
        $item->ciudad_id = $this->ciudad_id;
        if ($item->save()) {
            $this->vista = 'lista';
            $this->banner('Terminal creada correctamente');
        } else {
            $this->dangerBanner('Error al crear la terminal', 'error');
        }
        $this->reset(['nombre', 'direccion', 'telefono', 'estado', 'ciudad_id']);
    }

    public function edit($id)
    {
        $this->seleccionado = $id;
        $item = TerminalesModel::find($id);
        $this->nombre = $item->nombre;
        $this->direccion = $item->direccion;
        $this->telefono = $item->telefono;
        $this->estado = $item->estado;
        $this->ciudad_id = $item->ciudad_id;
        $this->vista = 'form';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'direccion' => 'nullable',
            'telefono' => 'nullable',
            'estado' => 'required',
            'ciudad_id' => 'required',
        ]);

        $item = TerminalesModel::find($this->seleccionado);
        $item->nombre = $this->nombre;
        $item->direccion = $this->direccion;
        $item->telefono = $this->telefono;
        $item->estado = $this->estado;
        $item->ciudad_id = $this->ciudad_id;
        if ($item->save()) {
            $this->vista = 'lista';
            $this->banner('Terminal actualizada correctamente');
        } else {
            $this->dangerBanner('Error al actualizar la terminal', 'error');
        }
        $this->reset(['nombre', 'direccion', 'telefono', 'estado', 'ciudad_id']);
    }

    public function cambiarEstado($param)
    {
        $item = TerminalesModel::find($param);
        $item->estado = $item->estado == 1 ? 0 : 1;
        $item->save();
        $this->banner('Estado cambiado correctamente');
    }
}
