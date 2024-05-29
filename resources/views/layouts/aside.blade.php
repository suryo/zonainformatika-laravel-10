<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '225px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '1px'}" data-kt-sticky-width="{lg: '225px'}" data-kt-sticky-left="auto" data-kt-sticky-top="94px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <!--begin::Aside nav-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header" data-kt-scroll-wrappers="#kt_aside" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100" id="#kt_aside_menu" data-kt-menu="true">
            <!--begin::Heading-->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Public</span>
                </div>
            </div>
            <!--end::Heading-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="/" class="menu-link">
                    @php
                    use App\Models\Course;
                    $courses = Course::all();
                    @endphp
                    <span class="menu-title">All Course</span>
                    <span class="menu-badge">{{ count($courses) }}</span>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ url('article') }}" class="menu-link">
                    <span class="menu-title">Article</span>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ url('project') }}" class="menu-link">
                    <span class="menu-title">Project + Source Code</span>
                </a>
            </div>
            <!--end::Menu item-->
          
            <!--begin::Heading-->
            <div class="menu-item pt-5">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Course Technology</span>
                </div>
            </div>
            <!--end::Heading-->
            @php
            use App\Models\CourseTechnology;
            $technologys = CourseTechnology::all();
            @endphp

            @foreach($technologys as $technology)
             <!--begin::Menu item-->
             <div class="menu-item">
                <a href="/?technologies={{ $technology->id }}" class="menu-link">
                    <span class="menu-title">{{ $technology->name }}</span>
                    
                </a>
            </div>
            <!--end::Menu item-->
           
            @endforeach
            <!--begin::Heading-->
            <div class="menu-item pt-5">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Course Categories</span>
                </div>
            </div>
            <!--end::Heading-->
            @php
            use App\Models\CourseCategory;
            $categories = CourseCategory::all();
            @endphp

            @foreach($categories as $category)
             <!--begin::Menu item-->
             <div class="menu-item">
                <a href="/?categories={{ $category->id }}" class="menu-link">
                    <span class="menu-title">{{ $category->name }}</span>
                    
                </a>
            </div>
            <!--end::Menu item-->
           
            @endforeach

          
         
            <!--begin::Heading-->
            <div class="d-none menu-item">
                <div class="menu-link">
                    <a hred="#" class="menu-title text-muted fs-7" id="kt_aside_categories_toggle" data-bs-toggle="collapse" data-bs-target="#kt_aside_categories_more">More Categories</a>
                </div>
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside nav-->
</div>