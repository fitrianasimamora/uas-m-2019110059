@extends('layouts.master')

@section('title', 'Add New Transaction')

@section('content')
    <h2>Add New Transaction</h2>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
                    value="{{ old('kategori') }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tujuan">Nominal</label>
                <input type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal" id="nominal"
                    rows="3">{{ old('nominal') }}</textarea>
                @error('nominal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nominal">Tujuan</label>
                <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan"
                    id="tujuan" min="1900" max="2099" value="{{ old('tujuan') }}">
                @error('tujuan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="account_id">Account ID</label>
                <input type="text" class="form-control @error('account_id') is-invalid @enderror" name="account_id"
                    id="account_id" min="1900" max="2099" value="{{ old('account_id') }}">
                @error('account_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
