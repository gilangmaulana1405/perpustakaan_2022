@extends('main-page.layouts.cari-buku')
@section('content')

<div class="container">
    .<div class="row mt-5 justify-content-center">
            <h3 class="section-title text-center">Search Books</h3>
            <div class="col-3">
                <form action="{{ route('cari-buku.search') }}" method="get">
                <div class="input-group mb-3 d-flex justify-content-center">
                    <input type="search" class="form-control" name="search" placeholder="Enter book title..">
                    <div class="input-group-append">
                        <button class="input-group-text btn btn-primary" id="basic-addon2"><i class="fa fa-search fa-solid fa-md" border="0"></i></button>
                    </div>
                </div>
                </form>
            </div>   
    </div>
</div>
   
@endsection