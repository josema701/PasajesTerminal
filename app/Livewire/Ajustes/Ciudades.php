<?php

namespace App\Livewire\Ajustes;

use Livewire\Component;
use App\Models\Ciudades as CiudadesModel;
use Livewire\WithPagination;
use Laravel\Jetstream\InteractsWithBanner;

class Ciudades extends Component
{
    use WithPagination, InteractsWithBanner;
    public $perPage=5, $search='', $seleccionado;

    public $nombre, $pais = 'Bolivia', $estado = true;
    public $paises = [
        "Afganistán",
        "Alemania",
        "Albania",
        "Andorra",
        "Angola",
        "Anguila",
        "Antártida",
        "Antigua y Barbuda",
        "Argentina",
        "Armenia",
        "Aruba",
        "Australia",
        "Austria",
        "Azerbaiyán",
        "Bahamas",
        "Barbados",
        "Bangladesh",
        "Baréin",
        "Bielorrusia",
        "Bélgica",
        "Belice",
        "Benín",
        "Bermudas",
        "Bielorrusia",
        "Bolivia",
        "Bonaire, San Eustaquio y Saba",
        "Bosnia y Herzegovina",
        "Botsuana",
        "Brasil",
        "Brunéi",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Bután",
        "Cabo Verde",
        "Camerún",
        "Canadá",
        "Chad",
        "Chile",
        "China",
        "Chipre",
        "Ciudad del Vaticano",
        "Colombia",
        "Comoras",
        "Congo",
        "Costa Rica",
        "Croacia",
        "Cuba",
        "Curaçao",
        "Chad",
        "Dominica",
        "Dinamarca",
        "Dominicana",
        "Djibouti",
        "Ecuador",
        "Egipto",
        "El Salvador",
        "Emiratos Árabes Unidos",
        "Eritrea",
        "Eslovaquia",
        "Eslovenia",
        "España",
        "Estados Unidos",
        "Estonia",
        "Etiopía",
        "Fiyi",
        "Filipinas",
        "Finlandia",
        "Francia",
        "Gabón",
        "Gambia",
        "Georgia",
        "Ghana",
        "Gibraltar",
        "Granada",
        "Grecia",
        "Groenlandia",
        "Guam",
        "Guatemala",
        "Guayana",
        "Guinea",
        "Guinea Ecuatorial",
        "Guinea-Bisáu",
        "Guyana",
        "Haití",
        "Honduras",
        "Hong Kong",
        "Hungría",
        "India",
        "Indonesia",
        "Irak",
        "Irán",
        "Irlanda",
        "Islandia",
        "Islas Caimán",
        "Islas Cocos",
        "Islas Cook",
        "Islas Feroe",
        "Islas Georgia del Sur y Sandwich del Sur",
        "Islas Malvinas",
        "Islas Marianas del Norte",
        "Islas Marshall",
        "Islas Pitcairn",
        "Islas Salomón",
        "Islas Turcas y Caicos",
        "Islas Vírgenes Británicas",
        "Islas Vírgenes de los Estados Unidos",
        "Israel",
        "Italia",
        "Jamaica",
        "Japón",
        "Jersey",
        "Jordania",
        "Kazajistán",
        "Kenia",
        "Kirguistán",
        "Kiribati",
        "Kosovo",
        "Kuwait",
        "Laos",
        "Lesoto",
        "Letonia",
        "Líbano",
        "Liberia",
        "Libia",
        "Liechtenstein",
        "Lituania",
        "Luxemburgo",
        "Macao",
        "Macedonia del Norte",
        "Madagascar",
        "Malasia",
        "Malaui",
        "Maldivas",
        "Malí",
        "Malta",
        "Islas Malvinas",
        "Islas Marianas del Norte",
        "Islas Marshall",
        "Islas Pitcairn",
        "Islas Salomón",
        "Marruecos",
        "Martinica",
        "Mauricio",
        "Mauritania",
        "Mayotte",
        "México",
        "Micronesia",
        "Moldavia",
        "Mónaco",
        "Mongolia",
        "Montenegro",
        "Montserrat",
        "Mozambique",
        "Myanmar",
        "Namibia",
        "Nauru",
        "Nepal",
        "Nicaragua",
        "Níger",
        "Nigeria",
        "Niue",
        "Norfolk",
        "Noruega",
        "Nueva Caledonia",
        "Nueva Zelanda",
        "Omán",
        "Países Bajos",
        "Pakistán",
        "Palau",
        "Palestina",
        "Panamá",
        "Papúa Nueva Guinea",
        "Paraguay",
        "Perú",
        "Polinesia Francesa",
        "Polonia",
        "Portugal",
        "Puerto Rico",
        "Qatar",
        "Reino Unido",
        "República Centroafricana",
        "República Checa",
        "República Dominicana",
        "República Democrática del Congo",
        "República del Congo",
        "Reunión",
        "Ruanda",
        "Rumanía",
        "Rusia",
        "Samoa",
        "Samoa Americana",
        "San Bartolomé",
        "San Cristóbal y Nieves",
        "San Marino",
        "San Martín",
        "San Pedro y Miquelón",
        "San Vicente y las Granadinas",
        "Santa Elena",
        "Santa Lucía",
        "Santo Tomé y Príncipe",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leona",
        "Singapur",
        "Sint Maarten",
        "Siria",
        "Somalia",
        "Sri Lanka",
        "Suazilandia",
        "Sudáfrica",
        "Sudán",
        "Sudán del Sur",
        "Suecia",
        "Suiza",
        "Surinam",
        "Svalbard y Jan Mayen",
        "Tailandia",
        "Taiwán",
        "Tanzania",
        "Tayikistán",
        "Territorio Británico del Océano Índico",
        "Territorio Palestino",
        "Timor Oriental",
        "Togo",
        "Tokelau",
        "Tonga",
        "Trinidad y Tobago",
        "Túnez",
        "Islas Turcas y Caicos",
        "Turkmenistán",
        "Tuvalu",
        "Ucrania",
        "Uganda",
        "Uruguay",
        "Uzbekistán",
        "Vanuatu",
        "Venezuela",
        "Vietnam",
        "Wallis y Futuna",
        "Yemen",
        "Yibuti",
        "Yugoslavia",
        "Zambia",
        "Zimbabue"
    ];

    public function render()
    {
        $ciudades = CiudadesModel::where('nombre', 'like', "%" . $this->search . "%")
                                ->orWhere('pais', 'like', "%" . $this->search . "%")
                                ->orWhere('estado', 'like', "%" . $this->search . "%")
                                ->orderBy('nombre', 'asc')
                                ->paginate($this->perPage);

        return view('livewire.ajustes.ciudades', compact('ciudades'));
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required|unique:ciudades,nombre',
            'pais' => 'required',
        ]);

        $item = new CiudadesModel();
        $item->nombre = $this->nombre;
        $item->pais = $this->pais;
        $item->estado = $this->estado;
        if ($item->save()) {
            $this->banner('Ciudad creada correctamente');
        } else {
            $this->dangerBanner('Error al crear la ciudad', 'error');
        }
        $this->reset(['nombre', 'pais', 'estado']);
    }

    public function edit($id)
    {
        $this->seleccionado = $id;
        $item = CiudadesModel::find($id);
        $this->nombre = $item->nombre;
        $this->pais = $item->pais;
        $this->estado = $item->estado;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required|unique:ciudades,nombre,'.$this->seleccionado,
            'pais' => 'required',
        ]);

        $item = CiudadesModel::find($this->seleccionado);
        $item->nombre = $this->nombre;
        $item->pais = $this->pais;
        $item->estado = $this->estado;
        if ($item->save()) {
            $this->banner('Ciudad actualizada correctamente');
        } else {
            $this->dangerBanner('Error al actualizar la ciudad', 'error');
        }
        $this->reset(['nombre', 'pais', 'estado', 'seleccionado']);
    }

    public function cambiarEstado($param)
    {
        $item = CiudadesModel::find($param);
        $item->estado = $item->estado == 1 ? 0 : 1;
        $item->save();
        $this->banner('Estado cambiado correctamente');
    }

    public function cancelar()
    {
        $this->reset(['nombre', 'pais', 'estado', 'seleccionado']);
    }

}
