@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="id-card-container rounded" id="id-card">
                <div class="card-img mt-5">
                    <div class="row pt-4" style="width: 100%;">
                        <div class="col-10 mt-5">
                            <div class="row">
                                <div class="col-4 p-0">
                                    <p style="font-size:medium" class="m-0"><strong>No. Anggota</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Nama</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Jenis Kelamin</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Tempat Lahir</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Tanggal Lahir</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Alamat</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Status</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>Pekerjaan</strong></p>
                                </div>
                                <div class="col-8">
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->member_no }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->name }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->gender }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->birth_place }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->birth_date->format('d-m-Y') }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->address }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->status }}</strong></p>
                                    <p style="font-size:medium" class="m-0"><strong>: {{ $user->occupation }}</strong></p>
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
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.7/dist/html2canvas.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        html2canvas(document.getElementById('id-card'), {
            scale: 4, // Increase the scale to improve the quality of the image
            useCORS: true // Enable cross-origin images if needed
        }).then(canvas => {
            let link = document.createElement('a');
            link.download = 'ID-Card-{{ $user->member_no }}.png';
            link.href = canvas.toDataURL('image/png', 1.0); // Set the image format and quality
            link.click();
            window.location.href = '{{ route('profile.show', ['id' => $user->id]) }}';
        });
    });
</script>

@endsection
