@extends('layouts.master')

@section('title', $transaction->kategori)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>{{ $transaction->kategori }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action={{ route('transactions.destroy', $transaction->id) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h5>
            <span class="badge badge-primary">
                <i class="fa fa-large fa-fw"></i>
                {{ $transaction->kategori }}
            </span>
        </h5>
        <hr>
        <p class="lead">{{ $transaction->kota }}</p>
        <p class="lead">{{ $transaction->negara }}</p>
    </div>
@endsection
