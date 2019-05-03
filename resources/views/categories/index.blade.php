@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span>Categories</span>
                        <span class="float-right"><a href="/categories/create">Create category</a></span>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            @if(count($categories) === 0)
                                <tr>
                                    <td colspan="2">Nothing to show</td>
                                </tr>
                            @endif
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <span class="float-right">
                                            <a href="/categories/{{$category->id}}/edit">edit</a> |
                                            <a href="/categories/{{$category->id}}/delete">delete</a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
