@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-success text-white">Profil Pengguna</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

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
                                    <th>Nama</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $user->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $user->birth_place }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $user->birth_date->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $user->status }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $user->occupation }}</td>
                                </tr>
                                <tr>
                                    <th>No. Anggota</th>
                                    <td>{{ $user->member_no }}</td>
                                </tr>
                                <tr>
                                    <th>Peran</th>
                                    <td>{{ $user->role }}</td>
                                </tr>
                                <tr hidden>
                                    <th>{{ __('Verified') }}</th>
                                    <td>{{ $user->verified ? 'Yes' : 'No' }}</td>
                                </tr>
                                @if ($user->member_no)
                                <tr>
                                    <th>Kartu Anggota</th>
                                    <td>
                                        <div class="id-card rounded">
                                            <div class="card text-bg-light">
                                                <img src="/images/background.jpg" class="card-img" alt="...">
                                                <div class="card-img-overlay mt-3">
                                                    <div class="row pt-4" style="width: 100%;">
                                                        <div class="col-10">
                                                            <div class="row">
                                                                <div class="col-4 p-0">
                                                                    <p style="font-size:xx-small" class="m-0"><strong>No. Anggota</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Nama</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Jenis Kelamin</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Tempat Lahir</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Tanggal Lahir</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Alamat</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Status</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>Pekerjaan</strong></p>
                                                                </div>
                                                                <div class="col-8">
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->member_no }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->name }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->gender }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->birth_place }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->birth_date->format('d-m-Y') }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->address }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->status }}</strong></p>
                                                                    <p style="font-size:xx-small" class="m-0"><strong>: {{ $user->occupation }}</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 d-flex align-items-center justify-content-center ps-4">
                                                            <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture" class="profile-pic">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Display ID Card image 
                                        <img src="{{ asset('storage/idcards/' . $user->id.'_idcard.jpg') }}" alt="ID Card">
                                    -->
                                    </td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>

                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-success">Ubah Profil</a>
                    <button id="download-btn" class="btn btn-success">Unduh Kartu Anggota</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.7/dist/html2canvas.min.js"></script>
    <script>
        document.getElementById('download-btn').addEventListener('click', function() {
            window.location.href = '{{ route('user.idcard', ['id' => $user->id]) }}';
        });
    </script>

@endsection
