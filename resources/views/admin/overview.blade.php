@extends('layouts.admin')
@section('content')
<section class="p-3">
        <header>
          <h3>Overview</h3>
          <p>Detail dari semua data yang ada</p>
        </header>
        <div class="row px-1 mb-2 gap-5">
            <div class="col-xl-4 col-12 card debit">
                <div style="margin-top: 80px; margin-bottom: 80px;">
                    <h1 class="text-center fw-bold" style="font-size: 80px">{{$books}}</h1>
                    <h5 class="text-center">Book Totals</h5>
                </div>    
            </div>
            <div class="col-xl-4 col-12 card debit">
                <div style="margin-top: 80px; margin-bottom: 80px;">
                    <h1 class="text-center fw-bold" style="font-size: 80px">{{$users}}</h1>
                    <h5 class="text-center">User Totals</h5>
                </div>    
            </div>
        </div>
    </div>
        
</section>
@endsection