<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('admin.confirm') }}">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" id="select-all"></th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                    <th scope="col">{{ __('Member Number') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                <tr>
                                    <td><input type="checkbox" name="member_ids[]" value="{{ $member->id }}" {{ $member->verified ? 'disabled' : '' }}></td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->verified ? 'Verified' : 'Not Verified' }}</td>
                                    <td>{{ $member->member_no }}</td>
                                    <td>
                                        <a href="{{ route('profileanggota.show', $member->id) }}" class="btn btn-info btn-sm">View Profile</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Confirm Selected Members</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('select-all').onclick = function() {
        var checkboxes = document.getElementsByName('member_ids[]');
        for (var checkbox of checkboxes) {
            if (!checkbox.disabled) {
                checkbox.checked = this.checked;
            }
        }
    }
</script>
@endsection
