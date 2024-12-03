<?php

namespace App\Http\Controllers;

use App\Models\ClientProfile;
use Illuminate\Http\Request;

class ClientProfileController extends Controller
{
    public function show($id)
    {
        $profile = ClientProfile::with('user')->findOrFail($id);
        return response()->json($profile);
    }

    public function update(Request $request, ClientProfile $profile)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:15',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'province' => 'nullable|string',
            'postal_code' => 'nullable|string|max:10',
            'profile_picture' => 'nullable|file|mimes:jpeg,png|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $profile->update($data);
        return response()->json($profile);
    }
}
