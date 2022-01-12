@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ ('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<h1>Leader Information</h1>

<form action="{{ route('createLeader') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="leaderName" class="form-label">Leader Name</label>
        <input name="leaderName" type="text" class="form-control" id="formGroupExampleInput" placeholder="Leader Name">
    </div>
    @error('leaderName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="example@gmail.com">
    </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="num" class="form-label">WhatApps Number</label>
        <input name="num" type="text" class="form-control" id="formGroupExampleInput" placeholder="081234567890">
    </div>
    <div class="mb-3">
        <label for="idLine" class="form-label">Line ID</label>
        <input name="idLine" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Line ID">
    </div>
    <div class="mb-3">
        <label for="gitId" class="form-label">Github/Gitlab ID</label>
        <input name="gitId" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Github ID">
    </div>
    <div class="mb-3">
        <label for="birthPlace" class="form-label">Birth Place</label>
        <input name="birthPlace" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Birth Place">
    </div>
    <div class="mb-3">
        <label for="birthDate" class="form-label">Birth Date</label>
        <input name="birthDate" type="date" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>
    <div class="mb-3">
        <label for="uploadCV" class="form-label">Upload CV</label>
        <input name="uploadCV" class="form-control" type="file" id="formFile">
    </div>


    <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
