@extends('layouts.master')

@section('title', $account->id)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>{{ $account->id }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action={{ route('accounts.destroy', $account->id) }} method="POST">
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
                {{ $account->id }}
            </span>
        </h5>
        <hr>
        <p class="lead">{{ $account->nama }}</p>
        <p class="lead">{{ $account->jenis }}</p>
    </div>
@endsection
