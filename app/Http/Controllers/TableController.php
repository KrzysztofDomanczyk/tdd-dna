<?php

namespace App\Http\Controllers;

use Domains\Repositories\TableRepository;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function __construct(protected TableRepository $tableRepository)
    {
    }

    public function list() {
        dd($this->tableRepository->get());
    }
}
