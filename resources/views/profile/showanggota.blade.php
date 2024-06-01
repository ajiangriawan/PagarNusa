<!-- resources/views/profile/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            @if ($user->profile_pic)
                            <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture" class="img-thumbnail">
                            @else
                            <img src="{{ asset('storage/profile_pics/default_profile.png') }}" alt="Default Profile Picture" class="img-thumbnail">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Email') }}</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Gender') }}</th>
                                    <td>{{ $user->gender }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Birth Place') }}</th>
                                    <td>{{ $user->birth_place }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Birth Date') }}</th>
                                    <td>{{ $user->birth_date }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Address') }}</th>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Status') }}</th>
                                    <td>{{ $user->status }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Occupation') }}</th>
                                    <td>{{ $user->occupation }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Member Number') }}</th>
                                    <td>{{ $user->member_no }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Role') }}</th>
                                    <td>{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Verified') }}</th>
                                    <td>{{ $user->verified ? 'Yes' : 'No' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary">{{ __('Edit Profile') }}</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection