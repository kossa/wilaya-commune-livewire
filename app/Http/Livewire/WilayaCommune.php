<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;

class WilayaCommune extends Component
{
    public $wilaya_id = '';
    public $password = '12345';

    public function render()
    {
        $wilayas = DB::table('wilayas')->get();
        $communes = DB::table('communes')->where('wilaya_id', $this->wilaya_id)->get();

        return view('livewire.wilaya-commune', compact('wilayas', 'communes'));
    }
}
