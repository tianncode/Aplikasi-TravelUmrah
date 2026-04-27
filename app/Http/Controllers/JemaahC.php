<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Jamaah;
use App\Models\JamaahGroup;
use App\Models\Package;
use App\Models\People;
use App\Models\Role;
use App\Models\User;

class JemaahC extends Controller
{
  public function index()
  {
    $users = User::with('userable')
      ->where('userable_type', People::class)
      ->get();

    $groups = JamaahGroup::all();
    $packages = Package::where('status', 'published')->get();
    $package_types = Package::where('status', 'published')
      ->distinct()
      ->pluck('type');

    return view(
      'backend.people.jemaah.tabel',
      compact('users', 'groups', 'packages', 'package_types')
    );
  }

  public function store(Request $request)
  {
    $request->validate([
      'username' => 'required|unique:users,username',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|min:8|same:password_confirmation',
      'password_confirmation' => 'required',

      'fullname' => 'required',
      'gender' => 'required',
      'birth_place' => 'required',
      'birth_date' => 'required',
      'phone' => 'required',
      'address' => 'required',
    ]);

    // 1️⃣ Insert People
    $people = People::create([
      'fullname' => $request->fullname,
      'gender' => $request->gender,
      'birth_place' => $request->birth_place,
      'birth_date' => $request->birth_date,
      'phone' => $request->phone,
      'address' => $request->address,
    ]);

    // 2️⃣ Insert User
    $user = User::create([
      'username' => $request->username,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'userable_id' => $people->id,
      'userable_type' => People::class,
      'is_active' => 1,
    ]);

    // 3️⃣ Assign Role Jamaah
    $jamaahRole = Role::where('name', 'jamaah')->first();

    if ($jamaahRole) {
      $user->roles()->sync([$jamaahRole->id]);
    }

    return redirect()->back()->with('success', 'Jemaah berhasil ditambahkan!');
  }
}
