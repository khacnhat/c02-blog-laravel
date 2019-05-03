@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table>
                            <tr>
                                <th>Name</th>
                            </tr>
                            @if(count($categories) === 0)
                                <tr>
                                    <td>Nothing to show</td>
                                </tr>
                            @endif
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
