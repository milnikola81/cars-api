<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Requests\CarsPost;

class CarsController extends Controller
{
    //
    public function index(Request $request)
    {
        $take = $request->input('take');
        $skip = $request->input('skip');

        return Car::
        when($take, function ($query) use ($take) {
            return $query->take($take);
        })
        ->when($skip, function ($query) use ($skip) {
            return $query->skip($skip);
        })
        ->get();
    }

    public function create()
    {
        //
    }

    public function store(CarsPost $request)
    {
        return Car::create($request->all());
    }

    public function show($id)
    {
        return Car::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(CarsPost $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return $car;
    }

    public function destroy($id)
    {
        return Car::destroy($id);
    }
}
