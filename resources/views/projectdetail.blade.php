@extends('layouts.frontend-metronic-template')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<style>
    #quill-editor-area {
        border: none;
        overflow: hidden;
    }
    .ql-container.ql-snow{ border: none !important;}

</style>
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
 
    <!--begin::Content-->
    <div class="content flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column py-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center my-1">
                    <span class="text-gray-900 fw-bold fs-1">Project & Code</span>
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
                    <li class="breadcrumb-item text-muted">Project & Code</li>
                    <!--end::Item-->
                    
                   
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
           
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post" id="kt_post">
            <!--begin::Post card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-20 pb-lg-0">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15">
                            <!--begin::Post content-->
                            <div class="mb-17">
                                <!--begin::Wrapper-->
                                <div class="mb-8">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap mb-6">
                                        <!--begin::Item-->
                                        <div class="me-9 my-1">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-element-11 text-primary fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-500">06 April 2021</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->

                                         <!--begin::Item-->
                                         <div class="me-9 my-1">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-user text-primary fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-500">Author : {{ $Project->author }} </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        
                                        <!--begin::Item-->
                                        <div class="my-1">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-file-added text-primary fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <span class="fw-bold text-gray-500">
                                                @if($Project->file_project)
                                                <strong>File:</strong>  <a href="{{ asset('assets/file_uploads/' . $Project->file_project) }}" target="_blank">Download File</a>
                                            @endif
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold">{{ $Project->project }} 
                                    </a><br>
                                    <a href="{{ route('project') }}" class="text-gray-900 text-hover-danger fs-5 fw-bold"><-- Back 
                                    <!--end::Title-->
                                    <!--begin::Container-->
                                    <div class="d-none overlay mt-8">
                                        <!--begin::Image-->
                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('assets/media/stock/1600x800/img-1.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Links-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <a href="pages/about.html" class="btn btn-primary">About Us</a>
                                            <a href="pages/careers/apply.html" class="btn btn-light-primary ms-3">Join Us</a>
                                        </div>
                                        <!--end::Links-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Description-->
                                <div class="fs-5 fw-semibold text-gray-600">
                                    <!--begin::Text-->
                                    <div id="quill-editor" class="mb-3"></div>
                                    <textarea class="mb-3 d-none" style="min-height:100%; height:auto;"  name="desc" id="quill-editor-area">{{ $Project->desc }}</textarea>
                                    
                                    <!--end::Text-->
                                </div>
                                <!--end::Description-->
                                <!--begin::Block-->
                                <div class="d-none d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                                    <!--begin::Section-->
                                    <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-70px symbol-circle mb-2">
                                            <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="mb-0">
                                            <a href="pages/user-profile/overview.html" class="text-gray-700 fw-bold text-hover-primary">Jane Johnson</a>
                                            <span class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Text-->
                                    <div class="mb-0 fs-6">
                                        <div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div>
                                        <a href="pages/user-profile/overview.html" class="fw-semibold link-primary">Author’s Profile</a>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Block-->
                                <!--begin::Icons-->
                                <div class="d-flex flex-center">
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                </div>
                                <!--end::Icons-->
                            </div>
                            <!--end::Post content-->
                        </div>
                        <!--end::Content-->
                      
                    </div>
                    <!--end::Layout-->
                    <!--begin::Section-->
                    <div class="d-none mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-gray-900">Video Tutorials</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="#" class="fs-6 fw-semibold link-primary">View All Videos</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Feature post-->
                                <div class="card-xl-stretch me-md-6">
                                    <!--begin::Image-->
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                    </a>
                                    <!--end::Image-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Mar 21 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Feature post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Feature post-->
                                <div class="card-xl-stretch mx-md-3">
                                    <!--begin::Image-->
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                    </a>
                                    <!--end::Image-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Apr 14 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Feature post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Feature post-->
                                <div class="card-xl-stretch ms-md-6">
                                    <!--begin::Image-->
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
                                        <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                    </a>
                                    <!--end::Image-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on May 14 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Feature post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-none mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-gray-900">Hottest Bundles</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="#" class="fs-6 fw-semibold link-primary">View All Offers</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-23.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-23.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-2x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                        <!--end::Text-->
                                        <!--begin::Text-->
                                        <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                            <!--begin::Label-->
                                            <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                            <span class="fs-6 fw-semibold text-gray-500">$</span>28</span>
                                            <!--end::Label-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch mx-md-3">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-14.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-2x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                        <!--end::Text-->
                                        <!--begin::Text-->
                                        <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                            <!--begin::Label-->
                                            <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                            <span class="fs-6 fw-semibold text-gray-500">$</span>27</span>
                                            <!--end::Label-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch ms-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-71.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-71.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-2x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                        <!--end::Text-->
                                        <!--begin::Text-->
                                        <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                            <!--begin::Label-->
                                            <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                            <span class="fs-6 fw-semibold text-gray-500">$</span>25</span>
                                            <!--end::Label-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Post card-->
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







<script>
    document.addEventListener('DOMContentLoaded', function() {
        const options = {
            debug: 'info',
            modules: {
                toolbar: false,
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        };

        var editor = new Quill('#quill-editor', options);

        var quillEditor = document.getElementById('quill-editor-area');

        // Inisialisasi editor dengan konten dari textarea
        if (quillEditor.value) {
            editor.setContents(JSON.parse(quillEditor.value));
        }

        editor.enable(false); // Disable the editor for view-only mode
    });
</script>
@endsection
