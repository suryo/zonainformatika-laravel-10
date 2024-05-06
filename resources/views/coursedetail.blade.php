@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        <!-- Bagian atas halaman -->
        <div class="row">
            <!-- Kolom untuk video -->
            <div class="col-md-6 col-sm-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Tambahkan URL video YouTube di sini -->
                    {!! $course->video !!}
                  
                </div>
            </div>
            <!-- Kolom untuk informasi course -->
            <div class="col-md-6 col-sm-12 text-left">
                <h2>{{ $course->title }}</h2>
                @auth
                    @if ($availability == 0)
                        <form action="{{ route('carts.store') }}" method="POST">
                            @csrf

                            <!-- Memeriksa apakah pengguna sudah login -->
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            {{-- <label for="quantity">User ID:</label> --}}

                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <input type="hidden" name="price" value="{{ $course->price }}">
                            <button class="btn btn-primary mt-1 mb-1" type="submit">Add to Cart</button>
                        </form>
                    @else
                       
                        @if ($subscribe[0]->orders_payment_status == 'unpaid' && $subscribe[0]->course_id == $course->id)
                            {{-- belum bayar --}}
                        @elseif($subscribe[0]->orders_payment_status == 'paid' && $subscribe[0]->course_id == $course->id)
                            {{-- sudah bayar --}}
                        @else
                            <form action="{{ route('carts.store') }}" method="POST">
                                @csrf

                                <!-- Memeriksa apakah pengguna sudah login -->
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                {{-- <label for="quantity">User ID:</label> --}}

                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <input type="hidden" name="price" value="{{ $course->price }}">
                                <button class="btn btn-primary mt-1 mb-1" type="submit">Add to Cart</button>
                            </form>
                        @endif
                    @endif
                @else
                    <div class="badge mb-5"> Login First to see course details </div>
                @endauth
                <p>{{ $course->short_desc }}</p>
                <p>{{ $course->text }}</p>
                <p>Author: {{ $course->author }}</p>

            </div>

        </div>
        <!-- Akhir bagian atas halaman -->

        @auth
            @if ($availability == 0)
            @else
                @if ($subscribe[0]->orders_payment_status == 'paid' && $subscribe[0]->status == 'active')
                    <!-- Bagian bawah halaman (detail course) -->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h3>Course Detail</h3>
                            <!-- Accordion untuk menampilkan detail course -->
                            <div id="accordion">
                                <!-- Looping untuk setiap course detail -->
                                @foreach ($coursedetails as $detail)
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $detail->id }}">
                                            <h5 class="mb-0 text-left">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse{{ $detail->id }}" aria-expanded="true"
                                                    aria-controls="collapse{{ $detail->id }}"  style="color: black;">
                                                    {{ $detail->title }}
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse{{ $detail->id }}" class="collapse"
                                            aria-labelledby="heading{{ $detail->id }}" data-parent="#accordion">
                                            <div class="card-body row">
                                                <!-- Kolom untuk video -->
                                                <div class="col-md-6 col-sm-12">
                                                    {!! $detail->video !!}
                                                </div>
                                                <!-- Kolom untuk informasi detail -->
                                                <div class="col-md-6 col-sm-12 text-left" style="padding-left: 20px;">
                                                    <p>{{ $detail->title }}</p>
                                                    <p>{{ $detail->text }}</p>
                                                    <p>{{ $detail->type }}</p>
                                                    <p>Author: {{ $detail->author }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Akhir bagian bawah halaman -->
                @elseif ($subscribe[0]->orders_payment_status == 'paid' && $subscribe[0]->status == 'inactive')
                    <p>anda sudah subscribe dan sudah menyelesaikan administrasi. course anda masih belum di aktifkan oleh admin</p>
                    <p>WA ke nomer 081217173406, untuk konfirmasi</p>
                @else
                    <p>anda sudah subscribe, namun anda belum menyelesaikan administrasi.</p>
                    <p>WA ke nomer 081217173406, untuk konfirmasi</p>
                @endif
            @endif
        @endauth

    </div>
@endsection
