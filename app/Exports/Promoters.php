<?php
// app/Exports/Promoters.php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Collection;

class Promoters implements FromCollection, WithHeadings, WithMapping
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        // Convert the data into a Collection instance
        return $this->data;
    }

    public function headings(): array
    {
        // Define the headings for the CSV
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
            'Country',
            'City',
            'Gender',
            'Nationality',
        ];
    }

    public function map($row): array
    {
        // Customize the data mapping for each row
        return [
            $row['id'], // Assuming your JSON has 'id'
            $row['name'], // Assuming your JSON has 'name'
            $row['email'], // Assuming your JSON has 'email'
            $row['phone'], // Assuming your JSON has 'phone'
            $row['country'], // Assuming your JSON has 'country'
            $row['city'], // Assuming your JSON has 'city'
            $row['gender'], // Assuming your JSON has 'gender'
            $row['nationality'], // Assuming your JSON has 'nationality'
        ];
    }
}
