@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        <form method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" type="text"/>
                            </div>
                            <button type="submit">Create category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
