<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image; // Menggunakan Image dari namespace Intervention\Image
use Carbon\Carbon;

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
        $date = Carbon::now();
        $year = $date->format('y');
        $month = $date->format('m');
        $day = $date->format('d');
        
        foreach ($memberIds as $index => $id) {
            $member = User::find($id);
            $count = User::whereDate('created_at', $date->toDateString())->count() + 1;
            $sequence = str_pad($count, 3, '0', STR_PAD_LEFT);
            $memberNumber = "{$year}.{$month}.{$day}.{$sequence}";
            $member->member_no = $memberNumber;
            $member->verified = true;
            $member->save();
        }

        return redirect()->route('admin.dashboard')->with('success', 'Members confirmed successfully');
    }
}
