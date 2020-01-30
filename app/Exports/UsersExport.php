<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromQuery, WithMapping, WithHeadings,ShouldAutoSize
{
    public function query()
    {
        return User::where('id', '>', '0');
    }

    public function map($user): array
    {
        return [
            $user->name,
            $user->email,
            $user->role,
            $user->dni,
            $user->code_specialty,
            $user->rne
        ];
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Correo electronico',
            'Rol de usuario',
            'DNI',
            'Codigo de especialidad',
            'RNE'

        ];
    }
}
