@extends('layout.layout')

@section('content')
    @include('header')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto p-5">
                <div class="grid grid-cols-12 mt-5 gap-x-5">
                    @include('shared.sidebar')

                    @php
                    $commentCount=0;
                    @endphp
                    @foreach ($post->comments as $comment)
                    @php
                        $commentCount+=1;
                    @endphp
                    @endforeach

                    <div class="col-span-12 lg:col-span-7 xl:col-span-9 2xl:col-span-6">
                        {{-- post card with comments --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3 mb-5">
                                    <div class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green-500/20">
                                        <img src="{{asset ('images/profile_icon.png')}}" alt="" class="rounded-full size-12">
                                    </div>
                                    <div class="grow">
                                        <h6 class="mb-1 text-15"><a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Frances Zboncak</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25 min</small></h6>
                                    </div>
                                    <div class="flex items-center gap-2 mt-4 shrink-0 md:mt-4">
                                        <button type="button" class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                            <span class="group-[.active]/item:hidden block"><i data-lucide="plus" class="inline-block mr-1 size-3"></i> Follow</span>
                                            <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2" class="inline-block mr-1 size-3"></i> Unfollow</span>
                                        </button>
                                        <div class="relative dropdown">
                                            <button class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10" id="socialPost1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="socialPost1">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="git-pull-request" class="inline-block mr-1 size-3"></i> <span class="align-middle">Create a poll</span></a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="messages-square" class="inline-block mr-1 size-3"></i> <span class="align-middle">Ask a question</span></a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="help-circle" class="inline-block mr-1 size-3"></i> <span class="align-middle">Help</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>{{$post->post}}</p>
                            </div>
                            <div class="border-y border-slate-200 card-body dark:border-zink-500">
                                <ul class="flex items-center gap-4 mb-0">
                                    <li>
                                        <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{$commentCount}} Comments</span></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">257 Likes</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                @include('shared.submit-comment')
                                <div class="mt-5">
                                    <div class="flex gap-3">
                                        <div class="bg-yellow-100 rounded-full size-9 shrink-0 dark:bg-yellow-500/20">
                                            <img src="{{asset ('images/profile_icon.png')}}" alt="" class="rounded-full size-9">
                                        </div>
                                        <div class="grow">
                                            @foreach ($post->comments as $comment)
                                                <div class="p-3 rounded-md bg-slate-100 dark:bg-zink-600 mt-2">
                                                    <h6 class="mb-3 text-15"><a href="#!">@bertha34</a> - <span class="text-sm font-normal text-slate-500 dark:text-zink-200">14 June, 2023</span></h6>
                                                    <p>{{$comment->comment}}</p>
                                                    <div class="flex items-center gap-2 mt-4">
                                                        <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Like (3)</a>
                                                        <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Reply</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="flex gap-3 mt-4">
                                                <div class="bg-green-100 rounded-full size-9 shrink-0 dark:bg-green-500/20">
                                                    <img src="{{asset ('images/profile_icon.png')}}" alt="" class="rounded-full size-9">
                                                </div>
                                                <div class="grow">
                                                    <div class="p-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                                        <h6 class="mb-3 text-15"><a href="#!">@frances_zboncak</a> - <span class="text-sm font-normal text-slate-500 dark:text-zink-200">14 June, 2023</span></h6>
                                                        <p class="mb-1">Sorry not at the moment. But Laravel + Interia + Vue will be ready next week hopefully. FYI: There will be no backend-related functionality with this template.</p>
                                                        <p>Thank you</p>
                                                        <div class="flex items-center gap-2 mt-4">
                                                            <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Like (6)</a>
                                                            <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->

                    </div><!--end-->

                </div><!--end-->
            </div>
            <!-- container-fluid -->
        </div>
    </div>
@endsection


