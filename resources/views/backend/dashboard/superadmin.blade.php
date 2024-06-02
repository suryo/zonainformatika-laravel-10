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
                    <span class="text-gray-900 fw-bold fs-1">Admin Dashboard</span>
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Dashboards</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-900">Projects</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
       
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post" id="kt_post">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 16-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10">
                         <!--begin::Header-->
                         <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                   
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $userCount }}</span>
                                    <!--end::Amount-->
                                   
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Users</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                          
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Roadmaps</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseRoadmapsCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Technology</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseTechnologiesCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Categories</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseCategoriesCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 16-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                           <!--begin::Title-->
                           <div class="card-title d-flex flex-column">
                               <!--begin::Info-->
                               <div class="d-flex align-items-center">
                                  
                                   <!--begin::Amount-->
                                   <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $userCount }}</span>
                                   <!--end::Amount-->
                                  
                               </div>
                               <!--end::Info-->
                               <!--begin::Subtitle-->
                               <span class="text-gray-500 pt-1 fw-semibold fs-6">Users</span>
                               <!--end::Subtitle-->
                           </div>
                           <!--end::Title-->
                       </div>
                       <!--end::Header-->
                       <!--begin::Card body-->
                       <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                         
                           <!--begin::Labels-->
                           <div class="d-flex flex-column content-justify-center flex-row-fluid">
                               <!--begin::Label-->
                               <div class="d-flex fw-semibold align-items-center">
                                   <!--begin::Bullet-->
                                   <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                   <!--end::Bullet-->
                                   <!--begin::Label-->
                                   <div class="text-gray-500 flex-grow-1 me-4">Roadmaps</div>
                                   <!--end::Label-->
                                   <!--begin::Stats-->
                                   <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseRoadmapsCount }}</div>
                                   <!--end::Stats-->
                               </div>
                               <!--end::Label-->
                               <!--begin::Label-->
                               <div class="d-flex fw-semibold align-items-center my-3">
                                   <!--begin::Bullet-->
                                   <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                   <!--end::Bullet-->
                                   <!--begin::Label-->
                                   <div class="text-gray-500 flex-grow-1 me-4">Technology</div>
                                   <!--end::Label-->
                                   <!--begin::Stats-->
                                   <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseTechnologiesCount }}</div>
                                   <!--end::Stats-->
                               </div>
                               <!--end::Label-->
                               <!--begin::Label-->
                               <div class="d-flex fw-semibold align-items-center">
                                   <!--begin::Bullet-->
                                   <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                   <!--end::Bullet-->
                                   <!--begin::Label-->
                                   <div class="text-gray-500 flex-grow-1 me-4">Categories</div>
                                   <!--end::Label-->
                                   <!--begin::Stats-->
                                   <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseCategoriesCount }}</div>
                                   <!--end::Stats-->
                               </div>
                               <!--end::Label-->
                           </div>
                           <!--end::Labels-->
                       </div>
                       <!--end::Card body-->
                   </div>
                    <!--end::Card widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 17-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                   
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $coursesCount }}</span>
                                    <!--end::Amount-->
                                   
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Courses</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                          
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Roadmaps</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseRoadmapsCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Technology</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseTechnologiesCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Categories</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseCategoriesCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 17-->
                    <!--begin::List widget 25-->
                    <div class="card card-flush h-lg-50">
                         <!--begin::Header-->
                         <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                   
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $coursesCount }}</span>
                                    <!--end::Amount-->
                                   
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Courses</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                          
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Roadmaps</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseRoadmapsCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Technology</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseTechnologiesCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Categories</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">{{ $courseCategoriesCount }}</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::LIst widget 25-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Timeline widget 3-->
                    <div class="card h-md-100">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">What’s up Today</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Total 424,567 deliveries</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-7 px-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                                        <span class="fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 fw-bold">20</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                                        <span class="fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 fw-bold">21</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                                        <span class="fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 fw-bold">22</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                                        <span class="fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 fw-bold">23</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                                        <span class="fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 fw-bold">24</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                                        <span class="fs-7 fw-semibold">We</span>
                                        <span class="fs-6 fw-bold">25</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
                                        <span class="fs-7 fw-semibold">Th</span>
                                        <span class="fs-6 fw-bold">26</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
                                        <span class="fs-7 fw-semibold">Fri</span>
                                        <span class="fs-6 fw-bold">27</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
                                        <span class="fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 fw-bold">28</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
                                        <span class="fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 fw-bold">29</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
                                        <span class="fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 fw-bold">30</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content (ishlamayabdi)-->
                            <div class="tab-content mb-2 px-9">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
                                            <span class="text-gray-500 fw-semibold fs-7">PM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
                                            <span class="text-gray-500 fw-semibold fs-7">AM</span></div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-500 fw-semibold fs-7">Lead by 
                                            <!--begin::Name-->
                                            <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                            <!--end::Name--></div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                            <!--begin::Action-->
                            <div class="float-end d-none">
                                <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Timeline widget 3-->
                    <!--begin::Timeline widget 3-->
                    <div class="card card-flush d-none h-md-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">What's on the road?</h3>
                                <div class="fs-6 text-gray-500">Total 482 participants</div>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Select-->
                                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                    <option value="1" selected="selected">Options</option>
                                    <option value="2">Option 1</option>
                                    <option value="3">Option 2</option>
                                    <option value="4">Option 3</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Dates-->
                            <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4">
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                        <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 text-gray-800 fw-bold">20</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                        <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 text-gray-800 fw-bold">21</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                        <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 text-gray-800 fw-bold">22</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                        <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 text-gray-800 fw-bold">23</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                        <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 text-gray-800 fw-bold">24</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                        <span class="text-gray-500 fs-7 fw-semibold">We</span>
                                        <span class="fs-6 text-gray-800 fw-bold">25</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                        <span class="text-gray-500 fs-7 fw-semibold">Th</span>
                                        <span class="fs-6 text-gray-800 fw-bold">26</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                        <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 text-gray-800 fw-bold">27</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                        <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 text-gray-800 fw-bold">28</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                        <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 text-gray-800 fw-bold">29</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10">
                                        <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 text-gray-800 fw-bold">30</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11">
                                        <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 text-gray-800 fw-bold">31</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                            </ul>
                            <!--end::Dates-->
                            <!--begin::Tab Content-->
                            <div class="tab-content px-9">
                                <!--begin::Day-->
                                <div id="kt_schedule_day_0" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">10:00 - 11:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Yannis Gloverson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">10:00 - 11:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Kendell Trevor</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Yannis Gloverson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Walter White</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_2" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Naomi Hayabusa</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Bob Harris</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_3" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Peter Marcus</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Yannis Gloverson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_4" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Terry Robins</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Terry Robins</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_5" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Bob Harris</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Terry Robins</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_6" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Walter White</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">10:00 - 11:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_7" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Peter Marcus</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Yannis Gloverson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_8" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">10:00 - 11:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_9" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Yannis Gloverson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_10" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Kendell Trevor</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">10:00 - 11:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Karina Clarke</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Michael Walters</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_11" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Bob Harris</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Caleb Donaldson</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00 
                                            <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-500">Lead by 
                                            <a href="#">Kendell Trevor</a></div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline widget-3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="d-none row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Card widget 18-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Body-->
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-100">
                                <!--begin::Col-->
                                <div class="col-sm-6 mb-10 mb-sm-0">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-33.jpg')"></div>
                                    <!--end::Image-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Headin-->
                                            <div class="d-flex flex-stack mb-6">
                                                <!--begin::Title-->
                                                <div class="flex-shrink-0 me-5">
                                                    <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                                    <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                                </div>
                                                <!--end::Title-->
                                                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center me-5 me-xl-13">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                        <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
                                                        <a href="pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                        <span class="symbol-label bg-success">
                                                            <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
                                                        <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Text-->
                                            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                            <!--end::Text-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                    <!--begin::Date-->
                                                    <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                                    <!--end::Date-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-500">Due Date</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                    <!--begin::Number-->
                                                    <span class="fs-6 text-gray-700 fw-bold">$
                                                    <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-500">Budget</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Users group-->
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                    <img alt="Pic" src="assets/media/avatars/300-3.jpg" />
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                </div>
                                            </div>
                                            <!--end::Users group-->
                                            <!--begin::Actions-->
                                            <a href="apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project 
                                            <i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 18-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Engage widget 8-->
                    <div class="card border-0 h-md-100" data-bs-theme="light" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Row-->
                            <div class="row align-items-center h-100">
                                <!--begin::Col-->
                                <div class="col-7 ps-xl-13">
                                    <!--begin::Title-->
                                    <div class="text-white mb-6 pt-6">
                                        <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span>
                                        <span class="fs-2qx fw-bold">Upgrade Your Plan</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Flat cartoony and illustrations with vivid unblended purple hair lady</span>
                                    <!--end::Text-->
                                    <!--begin::Items-->
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label" style="background: #35C7FF">
                                                    <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="text-white">
                                                <span class="fw-semibold d-block fs-8 opacity-75">Projects</span>
                                                <span class="fw-bold fs-7">Up to 500</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label" style="background: #35C7FF">
                                                    <i class="ki-duotone ki-abstract-26 fs-5 text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="text-white">
                                                <span class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
                                                <span class="fw-bold fs-7">Unlimited</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::Action-->
                                    <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                        <a href="#" class="btn btn-success flex-shrink-0 me-lg-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                                        <a href="#" class="btn btn-primary flex-shrink-0" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Read Guides</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-5 pt-10">
                                    <!--begin::Illustration-->
                                    <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 8-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="d-none col-xl-4">
                    <!--begin::Chart Widget 35-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-6">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>9.2%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Avg. Agent Earnings</span>
                                <!--end::Description-->
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0 px-0">
                            <!--begin::Nav-->
                            <ul class="nav d-flex justify-content-between mb-3 mx-9">
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content mt-n6">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-success">+576.24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-success">+124.03</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-success">+134.02</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-danger">+144.04</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-primary">+185.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-success">-154.03</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-warning">+124.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-info">+144.65</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-primary">+154.06</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-warning">+114.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-info">+165.86</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart Widget 35-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Table widget 14-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Activity Log</span>
                                {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> --}}
                            </h3>
                            <!--end::Title-->
                           
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-175px text-start">User</th>
                                            <th class="p-0 pb-3 min-w-175px text-start">Activity</th>
                                            <th class="p-0 pb-3 min-w-175px text-start">Date</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach($logActivities as $logActivity)
                                        <tr>
                                            <td>{{ $logActivity->user->name }}</td>
                                            <td>{{ $logActivity->activity }}</td>
                                            <td>{{ $logActivity->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="d-none row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have your tried 
                                <br />new 
                                <span class="fw-bolder">Invoice Manager?</span></h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                                    <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_new_address" data-bs-toggle="modal">Try Now</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light" href="apps/user-management/users/view.html">Learn More</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Timeline Widget 4-->
                    <div class="card h-md-100">
                        <!--begin::Card header-->
                        <div class="card-header position-relative py-0 border-bottom-1">
                            <!--begin::Card title-->
                            <h3 class="card-title text-gray-800 fw-bold">Active Tasks</h3>
                            <!--end::Card title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4">
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3 active" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_day">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">Day</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_week">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">Week</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_month">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">Month</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_2022">
                                        <!--begin::Title-->
                                        <span class="nav-text fw-semibold fs-4 mb-3">2022</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pb-0">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane active" id="kt_timeline_widget_4_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane" id="kt_timeline_widget_4_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane" id="kt_timeline_widget_4_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane" id="kt_timeline_widget_4_tab_2022" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                                    <div class="table-responsive pb-10">
                                        <!--begin::Timeline-->
                                        <div id="kt_timeline_widget_4_4" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <div class="footer pt-10 pb-5 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
        <!--begin::Copyright-->
        <div class="text-gray-900 order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2023&copy;</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
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
