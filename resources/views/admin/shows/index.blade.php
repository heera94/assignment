@extends('admin.layouts.master')

@section('page')
    
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">

            @include('admin.layouts.message')

            <div class="card">
                <div class="header">
                    <h4 class="title">Shows</h4>
            
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Url</th>
                            <th>Description</th>
                            <th>Logo</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category}}</td>
                                <td><a>{{ $product->url }}</a></td>
                                <td>{{ $product->description }}</td>
                                <td><img src="{{ url('uploads').'/'. $product->image }}" alt="{{ $product->image }}" style="width:50px;" class="img-thumbnail"></td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                

                                    {{ Form::open(['route' => ['show.destroy', $product->id], 'method'=>'DELETE']) }}
                                        {{ Form::button('<span class="fa fa-trash"></span>', ['type'=>'submit','class'=>'btn btn-danger btn-sm','onclick'=>'return confirm("Are you sure you want to delete this?")'])  }}
                                        {{ link_to_route('show.edit','', $product->id, ['class' => 'btn btn-info btn-sm ti-pencil']) }}
                                        {{ link_to_route('show.show','', $product->id, ['class' => 'btn btn-primary btn-sm ti-list']) }}
                                    {{ Form::close() }}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>


@endsection