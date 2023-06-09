@extends('admin.dashboard.master')

@section('content')
<div class="row ">
    <div class="col-md-8 offset-2 ">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Basic Form</h6>
                    <hr/>
                    <form class="row g-3" action="{{route('new.category')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
