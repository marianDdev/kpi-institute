<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use Lwwcas\LaravelCountries\Models\Country;

class CountryDropdown extends Component
{
    public Collection $countries;
    public string     $prefix;

    public function mount()
    {
        $this->countries = Country::all();
        $this->prefix    = '';
    }

    public function render()
    {
        return view('livewire.country-dropdown');
    }
}
