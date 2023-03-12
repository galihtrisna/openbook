@extends('layouts.user')
@section('content')
<!-- Featured -->
<form action="{{route('home.search')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="input-group rounded" style="width: 300px">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="search"/>
  <span class="input-group-text border-0" id="search-addon">
    <i class="bi bi-search"></i>
  </span>
</div>
</form>
                <div>
                    <div class="font-semibold text-[22px] text-white mb-[18px]">Featured</div>
                    <div class="grid grid-cols-2 gap-5 xl:gap-12">
                        @foreach($featured as $index => $feature)
                        <div class="col-span-1 relative overflow-hidden group rounded-[30px]" style="height: 400px">
                            <img src="{{asset('covers/'.$feature->cover)}}" class="object-cover rounded-[30px]" alt="" style="width: 800px">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-xl text-white">{{$feature->judul}}</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">{{$feature->tahun}}</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="{{asset('user/images/ic_play.svg')}}" class="" width="80" alt="">
                            </div>
                            <a href="{{ route('detail', $feature->id) }}" class="inset-0 absolute z-50"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Featured -->

                <!-- Continue Watching -->
                <div>
                    <div class="font-semibold text-[22px] text-white mb-[18px]">Explore Books</div>
                    <div class="d-flex align-content-start flex-wrap">

                        @foreach($books as $index => $book)
                        <div style="margin-bottom: 30px">
                            </div><div class="relative group overflow-hidden mr-[30px]" aria-hidden="true" style="width:200px">
                            <img src="{{asset('covers/'.$book->cover)}}" class="object-cover rounded-[30px] w-full h-[300px] w-[240px]" alt="">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                                <div class="px-7 pb-7">
                                    <div class="font-medium text-m text-white">{{$book->judul}}</div>
                                    <p class="mb-0 text-stream-gray text-base mt-[10px]">{{$book->tahun}}</p>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                                <img src="{{asset('user/images/ic_play.svg')}}" class="" width="80" alt="">
                            </div>
                            <a href="{{ route('detail', $book->id) }}" class="inset-0 absolute z-50"></a>
                        </div>
                        @endforeach

                        
                    </div>
                </div>
            </div>
            </div>
            </div>
                </div>
                <!-- /Continue Watching -->
@endsection