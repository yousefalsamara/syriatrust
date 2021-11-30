@extends('layouts.app')

@section('content')



    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>update News</h2>
                <ol>
                    <li><a href="{{ route('home')}}" >Home</a></li>

                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->


    <section  class="container">


                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="{{route('news.update',$news->id)}}" method="post"   enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <div class="row">

                               <br>
                                <div class="col-lg-6 form-group">

                                    <input type="text" name="title" class="form-control" id="title" value="{{$news->title}}" >
                                    <br>
                                </div>


                            <div class="form-group">
                                <textarea id="describtion" class="form-control" name="describtion" rows="5" >value="{{$news->describtion}}"</textarea>
                            </div>



                            <label for="name" class="col-md-4 col-form-label text-md-right">image</label>

                            <br>

                            <input  type="file"  class=" form-control " name="image" value="{{$news->image}}" >
                            <img src="{{asset('/storage/'.$news->image)}}" width="500px" height="500px"alt="Image">
                            <br>



















                            </div>

                        <select class="form-select" name="governorate[]" multiple>
                            @foreach($governorate as $g)




                                <option  value="{{$g->id}}" @if(in_array($g->id,$news->governorates->pluck('id')->toArray())) selected="selected" @endif >{{$g->name}}</option>



                            @endforeach
                        </select>




                        <div class="text-center"> <button type="submit"  class="btn btn-primary">
                            Update NEWS
                        </button>
                        </div>
                    </form>
                </div>





    </section><!-- End Contact Us Section -->










@endsection
