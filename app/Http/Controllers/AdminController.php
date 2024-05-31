<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $members = User::where('role', 'anggota')->get();
        return view('admin.dashboard', compact('members'));
    }

    public function confirm(Request $request)
    {
        $memberIds = $request->input('member_ids');
        $now = now();
        $yearMonth = $now->format('Ym');

        foreach ($memberIds as $index => $id) {
            $member = User::find($id);
            $memberNumber = $yearMonth . sprintf('%03d', $index + 1);
            $member->member_no = $memberNumber;
            $member->verified = true;
            $member->save();
        }

        return redirect()->route('admin.dashboard')->with('success', 'Members confirmed successfully');
    }
}
