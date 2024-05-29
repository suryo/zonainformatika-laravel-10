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
                    <span class="text-gray-900 fw-bold fs-1">All Courses</span>
                    <!--begin::Description-->
                    <small class="text-muted fs-6 fw-semibold ms-1">(6,299)</small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
           
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post" id="kt_post">
            <!--begin::Questions-->
            <div class="mb-10">
                @foreach ($courses as $course)
                <!--begin::Question-->
                <div class="mb-0">
                    <!--begin::Head-->
                    <div class="d-flex align-items-center mb-4">
                        <!--begin::Title-->
                        <a href="apps/devs/question.html" class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">{{ $course->title }}</a>
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
                    <div class="fs-base fw-normal text-gray-700 mb-4">{{ ($course->short_desc) }} </div>
                    <!--end::Summary-->
                    <!--begin::Foot-->
                    <div class="d-flex flex-stack flex-wrap">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-2">
                                <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">J</div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Name-->
                            <div class="d-flex flex-column align-items-start justify-content-center">
                                <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">{{ $course->author }}</span>
                                <span class="text-muted fs-8 fw-semibold lh-1">{{ count($course->courseDetails) }} SubCourse</span>
                               
                            </div>
                            <!--end::Name-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Info-->
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Answers-->
                            <a href="apps/devs/question.html#answers" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">{{ $course->technology }}</a>
                            <!--end::Answers-->
                            <!--begin::Tags-->
                            <a href="apps/devs/tag.html" class="btn btn-sm btn-light px-4 me-2">{{ $course->category }}</a>
                            <!--end::Tags-->
                            <!--begin::Upvote-->
                            <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" title="Upvote this question" data-bs-dismiss="click">{{ count($course->courseDetails) }}  
                            <i class="ki-duotone ki-black-right fs-3ms-2 me-0 fs-3"></i></a>
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
            <div class="d-flex flex-center mb-0">
                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">1</a>
                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 active">2</a>
                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">3</a>
                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">4</a>
                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">5</a>
                <span class="text-muted fw-semibold fs-6 mx-2">..</span>
                <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">19</a>
            </div>
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
