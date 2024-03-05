<?php

namespace App\Livewire\Ajustes;

use Livewire\Component;

class Ajustes extends Component
{
    public $vistaAdmin = null; // 'monedas'

    #[Title('Ajustes')]
    public function render()
    {
        return view('livewire.ajustes.ajustes');
    }

    public function verVista($param){
        $this->vistaAdmin = $param;
    }
}
