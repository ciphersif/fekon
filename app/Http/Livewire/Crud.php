<?php

namespace App\Http\Livewire;
use App\Models\Example;
use Livewire\Component;

class Crud extends Component
{
    public function render()
    {
		$data = Example::orderBy('id','DESC')->get();
        return view('livewire.crud',['datas'=>$data]);
    }
}
