@extends('admin.dashboard.master')

@section('content')
    <div class="row ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Basic Form</h6>
                        <hr/>
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Si</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($categories as $key=>$category)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        <img src="{{asset($category->image)}}" alt="" class="img-fluid" style="height: 50px">
                                    </td>
                                    <td>
                                        {{$category->status==1?'published':'unpublished'}}
                                    </td>
                                    <td class="btn-group">
                                        <a href="{{route('edit.category',$category->id)}}" class="btn btn-primary btn-sm ">Edit</a>
                                        @if($category->status == 1)
                                            <a href="" class="btn btn-primary btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="" class="btn btn-primary btn-sm mx-1">Published</a>
                                        @endif
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
