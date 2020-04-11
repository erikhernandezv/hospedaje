<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MunicipioRepository;

class municipioController extends AppBaseController
{
    private $municipioRepository;

    function __construct(MunicipioRepository $municipioRepository) {
        $this->municipioRepository = $municipioRepository;
    }

    public function cargarMunicipio($soloMunicipio = false) {
        $entidad = $this->municipioRepository->municipio();
        foreach ($entidad as $value) {
            $opcion[$value->mun_consecutivo] = $value->mun_municipio . ($soloMunicipio ? '' : '-' . $value->departamentos['dep_departamento']);
        }
        return $opcion;
    }
}
