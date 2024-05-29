@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
        <!-- Bagian atas halaman -->
        <div class="row">
            <!-- Kolom untuk video -->
            <div class="col-md-6 col-sm-12" {{ $course->video == null ? 'hidden' : '' }}>
                @if ($course->video)
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Tambahkan URL video YouTube di sini -->
                    {!! $course->video !!}
                </div>
                @endif
            </div>
            <!-- Kolom untuk informasi course -->
            <div class={{ $course->video == null ? 'col-md-12 col-sm-12 text-left' : 'col-md-6 col-sm-12 text-left' }}>
                <h2>{{ $course->title }}</h2>
                @auth
                    @if ($availability_on_cart == 0)
                        @if ($availability == 0)
                            <form action="{{ route('carts.store') }}" method="POST">
                                @csrf
                                <!-- Memeriksa apakah pengguna sudah login -->
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <input type="hidden" name="price" value="{{ $course->price }}">
                                <p>Rp. {{ number_format($course->price, 0, ',', '.') }}</p>
                                <button class="btn btn-info mt-1 mb-1" type="submit">Add to Cart</button>
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
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <input type="hidden" name="price" value="{{ $course->price }}">
                                    <p>Rp. {{ number_format($course->price, 0, ',', '.') }}</p>
                                    <button class="btn btn-info mt-1 mb-1" type="submit">Add to Cart</button>
                                </form>
                            @endif
                        @endif
                    @else
                        {{-- <a href="{{ url('carts') }}" class="btn btn-success mt-1 mb-1" type="submit">Already on Cart</a> --}}
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
                        <div class="col">
                            <h3>Course Detail</h3>
                            <!-- Accordion untuk menampilkan detail course -->
                            <div class="accordion" id="accordionExample">
                                <!-- Looping untuk setiap course detail -->
                                @foreach ($coursedetails as $detail)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $detail->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $detail->id }}" aria-expanded="true" aria-controls="collapse{{ $detail->id }}">
                                                {{ $detail->title }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $detail->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $detail->id }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <!-- Kolom untuk video -->
                                                @if ($detail->video)
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    {!! $detail->video !!}
                                                </div>
                                                @endif
                                                <!-- Kolom untuk informasi detail -->
                                                <div class="text-left">
                                                    {{-- <h2>{{ $detail->title }}</h2> --}}
                                                    <p>{!! $detail->short_desc !!}</p>
                                                    {{-- <p>{!! $detail->text !!}</p> --}}
                                                    <textarea class="ckeditor" id="konten{{ $detail->id }}" name="description" rows="4">{{ $detail->text }}</textarea>
                                                    {{-- <p>{{ $detail->type }}</p>
                                                    <p>Author: {{ $detail->author }}</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                 {{-- <script>
                                // Initialize CKEditor for each textarea
                                $(document).ready(function() {
                                    @foreach ($coursedetails as $detail)
                                        CKEDITOR.replace('konten{{ $detail->id }}');
                                    @endforeach
                                });
                            </script> --}}

                            <script>
                                @foreach ($coursedetails as $detail)
                               ClassicEditor
                                   .create(document.querySelector('#konten{{ $detail->id }}'), {
                                       toolbar: []
                                   })
                                   .then(konten => {
                                       konten.enableReadOnlyMode("konten{{ $detail->id }}");
                       
                                       console.log(konten);
                                   }).catch(error => {
                                       console.error(error);
                                   });
                                   @endforeach
                           </script>
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
