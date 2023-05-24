<?php

namespace App\Filament\Pages;


use Filament\Facades\Filament;

class Login extends \Filament\Http\Livewire\Auth\Login
{
    public function mount(): void
    {
        parent::mount();

        if (app()->environment('local')) {
            $this->form->fill([
                'email' => 'test@example.com',
                'password' => 'password',
                'remember' => true,
            ]);
        }
    }
}
