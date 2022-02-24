@extends('master')
@section('title')
    Manage Blog Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            Manage Blog
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover"
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author Name</th>
                                <th>Blog Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>HK</td>
                                    <td>Good</td>
                                    <td>This is a blog page</td>

                                    <td>
                                        <a href="{{route('edit-blog',$blog->id)}}" class="btn btn-outline-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
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
    </section>
@endsection
