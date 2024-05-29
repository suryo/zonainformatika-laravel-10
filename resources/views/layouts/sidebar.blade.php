<div class="sidebar p-5 px-lg-0 py-lg-11" data-kt-drawer="true" data-kt-drawer-name="sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="275px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggle">
    <!--begin::Quick Search-->
    {{-- <form id="kt_sidebar_search_form" action="apps/devs/search.html" class="w-100 position-relative mb-5 mb-lg-10" autocomplete="off">
        <input type="hidden" />
        <i class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Search" />
        <!--end::Input-->
    </form> --}}
    <!--end::Quick Search-->
    <!--begin::Popular Questions-->
    <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
        <!--begin::Header-->
        <div class="card-header align-items-center border-0">
            <!--begin::Title-->
            <h3 class="card-title fw-bold text-gray-900 fs-3">Project + Source Code</h3>
            <!--end::Title-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0">
            @php
            use App\Models\Project;
            $projects = Project::where('status', 'active')
                   ->where('deleted', 'false')
                   ->orderByDesc('id')
                   ->limit(5)
                   ->get();
            @endphp

            @foreach($projects as $project)
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Arrow-->
                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <!--end::Arrow-->
                <!--begin::Title-->
                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">{{ $project->project }}</a>
                <!--end::Title-->
            </div>
            <!--end::Item-->
           
            @endforeach
          
            
        </div>
        <!--end: Card Body-->
    </div>
    <!--end::Popular Questions-->

    <!--begin::Popular Questions-->
    <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
        <!--begin::Header-->
        <div class="card-header align-items-center border-0">
            <!--begin::Title-->
            <h3 class="card-title fw-bold text-gray-900 fs-3">Article</h3>
            <!--end::Title-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0">
            @php
            use App\Models\Article;
            $articles = Article::where('status', 'active')
                   ->where('deleted', 'false')
                   ->orderByDesc('id')
                   ->limit(5)
                   ->get();
            @endphp

            @foreach($articles as $article)
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Arrow-->
                <i class="ki-duotone ki-right-square fs-2 mt-0 me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <!--end::Arrow-->
                <!--begin::Title-->
                <a href="apps/devs/question.html" class="text-gray-700 text-hover-primary fs-6 fw-bold">{{ $article->title }}</a>
                <!--end::Title-->
            </div>
            <!--end::Item-->
           
            @endforeach
        </div>
        <!--end: Card Body-->
    </div>
    <!--end::Popular Questions-->
</div>