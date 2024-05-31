@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <!--begin::Content-->
    <div class="content flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column py-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center my-1">
                    <span class="text-gray-900 fw-bold fs-1">All Users</span>
                    <!--begin::Description-->
                    <small class="text-muted fs-6 fw-semibold ms-1">{{ count($users) }}</small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

            <!--begin::Actions-->
								<div class="d-flex align-items-center py-1">
									<!--begin::Button-->
									<a href="{{ route('users.create') }}" class="btn btn-flex btn-sm btn-primary fw-bold border-0 fs-6 h-40px" id="kt_toolbar_primary_button">New User</a>
									<!--end::Button-->
								</div>
								<!--end::Actions-->
           
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post" id="kt_post">
            <!--begin::Questions-->
            <div class="mb-10">
                @foreach ($users as $user)
                <!--begin::Question-->
                <div class="mb-0">
                    <!--begin::Head-->
                    <div class="d-flex align-items-center mb-4">
                        <!--begin::Title-->
                        <a href="apps/devs/question.html" class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">{{ $user->name }}</a>
                        <!--end::Title-->
                        <!--begin::Icons-->
                        <div class="d-flex align-items-center">
                            <span class="ms-1" data-bs-toggle="tooltip" title="New question">
                                <i class="ki-duotone ki-information-5 text-primary fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="User replied">
                                <i class="ki-duotone ki-sms text-danger fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <!--end::Icons-->
                    </div>
                    <!--end::Head-->
                    <!--begin::Summary-->
                    <div class="fs-base fw-normal text-gray-700 mb-4">{{ $user->email }} </div>
                    <!--end::Summary-->
                    <!--begin::Foot-->
                    <div class="d-flex flex-stack flex-wrap">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-2">
                                <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">></div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Name-->
                            <div class="d-flex flex-column align-items-start justify-content-center">
                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">{{ $user->tempat_lahir }}</span>
                                <span class="text-muted fs-8 fw-semibold lh-1">{{ $user->tanggal_lahir }}</span>
                               
                            </div>
                            <!--end::Name-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Answers-->
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">View</a>
                            <!--end::Answers-->
                            <!--begin::Tags-->
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-light px-4 me-2">Edit</a>
                            <!--end::Tags-->
                            <!--begin::Upvote-->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-flex btn-light px-3">Delete</button>
                            </form>
                            {{-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" title="Upvote this question" data-bs-dismiss="click">qwerty   --}}
                            {{-- <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i></a> --}}
                            <!--end::Upvote-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Foot-->
                </div>
                <!--end::Question-->
                <!--begin::Separator-->
                <div class="separator separator-dashed border-gray-300 my-8"></div>
                <!--end::Separator-->
                @endforeach
            </div>
            <!--end::Questions-->
            <!--begin::Pagination-->

            <!--end::Questions-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <div class="footer pt-10 pb-5 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
        <!--begin::Copyright-->
        <div class="text-gray-900 order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2024&copy;</span>
            <a href="https://zonainformatika.com" target="_blank" class="text-gray-800 text-hover-primary">Zonainformatika</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item">
                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
            </li>
            <li class="menu-item">
                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link ps-2 pe-0">Purchase</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Footer-->

    </div>
@endsection
