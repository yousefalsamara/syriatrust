@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row m-3">
            <div class="col-md-12">
                <div class="col-md-2" style="float: left">

                    <a href="{{ url('news/create')}}" type="button" class="btn btn-primary">add news</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class=" table table-striped table-bordered dt-responsive nowrap ">
                    <thead class="thead-inverse">

                    <tr>

                        <th scope="col">id</th>
                        <th scope="col">titel</th>
                        <th scope="col">Describtion</th>
                        <th scope="col">image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($News as $p)

                        <tr>
                            <td>{{$p->id }}</td>
                            <td>{{$p->title}}</td>
                            <td>{{Str::limit($p->describtion, 120, $end=".")}}</td>
                            <td><img src="{{asset('/storage/'.$p->image)}}" width="100px" height="100px" alt="Image">
                            </td>

                            <form method="get" action="{{ route('news.edit',$p->id) }}">
                                <th>
                                    <button type="submit" class="btn btn-dark">edit</button>
                                </th>
                            </form>
                            <form method="post"
                                  action="{{route('news.destroy',$p->id)}}"> {{method_field('DELETE')}} @csrf
                                <th>
                                    <button class="btn btn-danger" type="submit ">delete</button>
                                </th>
                            </form>


                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
