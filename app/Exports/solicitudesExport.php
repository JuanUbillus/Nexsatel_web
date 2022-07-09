<?php

namespace App\Exports;

use App\Models\Solicitud;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class solicitudesExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    private $contador = 0;
    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido',
            'Distrito',
            'Dirección',
            'Telefono',
            'Email',
            'Estado'
        ];
    }

    public function map($solicitud): array
    {
        //Incremento el valor del contador de uno en uno
        $this->contador++;
        return [
            
            $solicitud->nombre,
            $solicitud->apellido,
            $solicitud->ubigeo->distrito->nombre,
            $solicitud->direccion,
            $solicitud->telefono,
            $solicitud->email,
            $solicitud->estado,
        ];
    }

    public function collection()
    {
        return Solicitud::all();
    }
}
