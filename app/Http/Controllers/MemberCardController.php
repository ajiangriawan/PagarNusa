<?php

// app/Http/Controllers/MemberCardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MemberCardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('member.card', compact('user'));
    }

    public function download()
    {
        $user = Auth::user();

        $img = Image::make(public_path('images/member_card_template.jpg'));

        // Add text to the image
        $img->text($user->member_no, 150, 100, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $img->text($user->name, 150, 140, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        // Add other fields similarly
        // Example:
        $img->text($user->gender, 150, 180, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $img->text($user->birth_place, 150, 220, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $img->text($user->birth_date, 150, 260, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $img->text($user->address, 150, 300, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $img->text($user->status, 150, 340, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $img->text($user->occupation, 150, 380, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('left');
            $font->valign('top');
        });

        $profilePic = Image::make(storage_path('app/public/' . $user->profile_pic))->resize(100, 100);
        $img->insert($profilePic, 'top-left', 30, 80);

        // Save the image to a temporary path
        $tempPath = storage_path('app/public/member_card_' . $user->id . '.jpg');
        $img->save($tempPath);

        // Return the image as a download response
        return response()->download($tempPath)->deleteFileAfterSend(true);
    }
}
