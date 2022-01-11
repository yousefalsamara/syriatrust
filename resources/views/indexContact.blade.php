@extends('layouts.appadmin')

@section('content')


    <div class="container ">
        <div class="row m-3">

            <div class="col-md-12">
                <table class=" table table-striped table-bordered dt-responsive nowrap ">
                    <thead class="thead-inverse">

                    <tr>

                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">governorates</th>
                        <th scope="col">subject</th>
                        <th scope="col">mobile</th>
                        <th scope="col">email</th>
{{--                        <th scope="col">message</th>--}}

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $p)
                        <tr>

                            <td>{{$p->id }}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->governorates}}</td>
                            <td>{{$p->subject}}
                            </td>
                            <td>{{$p->mobile}}</td>
                            <td>{{$p->e_mail}}</td>
{{--                            <td>{{$p->message}}</td>--}}



                            <form method="post"  action="{{route('contact_delete',$p->id)}}"> @csrf
                                @csrf
                                <td>
                                    <button class="btn btn-danger" type="submit ">delete</button>
                                </td>
                            </form>




                            <form method="get" action="{{route('contact_show',$p->id)}}"
                            > @csrf
                                <td>
                                    <button style="background: #428bca;  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
" type="submit ">show</button>
                                </td>
                            </form>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>

{{--    <div class="container ">--}}
{{--        <div class="row">--}}
{{--            <div class="col text-center m-lg-5">--}}
{{--                <nav aria-label="Page navigation example">--}}
{{--                    <ul class="pagination">--}}
{{--                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="d-flex justify-content-center">
        {!! $contact->links() !!}
    </div>






@endsection

