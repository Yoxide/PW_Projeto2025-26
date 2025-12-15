<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('admin.users-edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,coordinator,operational,client',
        ]);

        // Optional safety: prevent self-demotion
        if ($user->id === auth()->id()) {
            return back()->withErrors('Não pode alterar o seu próprio role.');
        }

        $user->update([
            'role' => $request->role,
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Role atualizado com sucesso.');
    }
}
