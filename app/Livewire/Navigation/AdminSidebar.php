<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class AdminSidebar extends Component
{
    public function disableAdminMode(): void
    {
        session()->forget('auth.password_confirmed_at');
        $this->redirect(session('url.intended', route('user.dashboard')), navigate: true);
    }

    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect((route('login')), navigate: true);

    }

    public function render()
    {
        return view('livewire.navigation.admin-sidebar');
    }
}
