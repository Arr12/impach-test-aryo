<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Employee;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login() {
        return view('layout.login');
    }

    public function dashboard() {
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $data_employees = [
            'labels' => $labels,
            'datasets' => []
        ];
        foreach ($labels as $key => $value) {
            $count = Employee::whereMonth('date', date('m', strtotime($value)))->count();
            array_push($data_employees['datasets'], $count);
        }
        return view('pages.dashboard', [
            'data_employees' => $data_employees
        ]);
    }
}