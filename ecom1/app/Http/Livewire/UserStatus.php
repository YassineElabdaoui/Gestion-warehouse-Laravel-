<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;

class UserStatus extends Component
{
    public Model $model;
    public string $field;

    public bool $isActive;

    public function mount()
    {
        
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        
        return view('livewire.user-status');
    }

    public function update($field, $value)
    {
       
        $this->model->setAttribute( $this->field, $value)->save();
        dd($value, $this->field);
    }
}
