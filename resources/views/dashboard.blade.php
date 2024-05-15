@extends('layout.layout')

@section('content')
    @include('header')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto p-5">
                <div class="grid grid-cols-12 mt-5 gap-x-5">

                    @include('shared.sidebar')

                    <div class="col-span-12 lg:col-span-7 xl:col-span-9 2xl:col-span-6">
                        {{-- stories --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="w-full" data-simplebar>
                                    <div class="flex gap-4">
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-pink-100 dark:bg-pink-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                                <div class="absolute flex items-center justify-center size-5 text-white rounded-full ltr:-right-0.5 rtl:-left-0.5 -bottom-0.5 bg-sky-500">
                                                    <i data-lucide="plus" class="size-4"></i>
                                                </div>
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">Your story</h6>
                                        </a>

                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-yellow-100 dark:bg-yellow-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate"> @blaze_herzog</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-emerald-100 dark:bg-emerald-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@keon_rippin</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-purple-100 dark:bg-purple-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@niko_watsica</h6>
                                        </a>

                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-custom-100 dark:bg-custom-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@genesis</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-green-100 dark:bg-green-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@brayan_herman</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-purple-100 dark:bg-purple-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@logan</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-cyan-100 dark:bg-cyan-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@gerhold</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@fletcher</h6>
                                        </a>
                                        <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                            <div class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-full size-16">
                                            </div>
                                            <h6 class="mt-2 font-normal truncate">@fletcher</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end stories card-->

                        {{-- create post card --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="flex gap-3">
                                    <ul class="flex gap-3 grow">
                                        <li>
                                            <a href="#!"><i data-lucide="video" class="inline-block text-red-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Live Video</span></a>
                                        </li>
                                        <li>
                                            <a href="#!" data-modal-target="imagesVideoPostModal"><i data-lucide="image" class="inline-block size-4 ltr:mr-1 text-custom-600 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Image/Video</span></a>
                                        </li>
                                        <li>
                                            <a href="#!" data-modal-target="eventModal"><i data-lucide="calendar-days" class="inline-block text-green-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Event</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i data-lucide="at-sign" class="inline-block size-4 ltr:mr-1 text-sky-500 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Mention</span></a>
                                        </li>
                                    </ul>
                                    <div class="relative dropdown shrink-0">
                                        <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="socialMediaCreate" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="socialMediaCreate">
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
                                <form action="{{ route('posts.store' )}}" method="POST">
                                    @csrf
                                    <div class="flex gap-3 mt-4">
                                        <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                            <img src="{{asset ('images/profile_icon.png')}}" alt="" class="rounded-full size-9">
                                        </div>
                                        <div class="grow">
                                            <textarea name="post" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" placeholder="Share your thoughts ..." rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-right">
                                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Share Post</button>
                                    </div>
                                </form>
                            </div>
                        </div><!--end card-->

                        {{-- post card --}}
                        @foreach ( $posts as $post )

                            {{-- get comments count--}}
                            @php
                                $commentCount=0;
                            @endphp
                            @foreach ($post->comments as $comment)
                                @php
                                    $commentCount+=1;
                                @endphp
                            @endforeach


                        <div class="card">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3 mb-5">
                                    <div class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green=500/20">
                                        <img src="{{asset ('images/profile_icon.png')}}" alt="" class="rounded-full size-12">
                                    </div>
                                    <div class="flex flex-wrap items-center mt-4 shrink-0 md:mt-4">
                                        <p>Paul Okutu</p>
                                    </div>

                                    <div class="flex flex-wrap items-center mt-4 shrink-0 md:mt-4">
                                        <button type="button" class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                            <span class="group-[.active]/item:hidden block"><i data-lucide="plus" class="inline-block mr-1 size-3"></i> Follow</span>
                                            <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2" class="inline-block mr-1 size-3"></i> Unfollow</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <p>{{$post->post}}</p>
                                </div>
                            </div>
                            <div class="border-y border-slate-200 card-body dark:border-zink-500">
                                <div class="grid grid-cols-2 gap-10">
                                    <p class="text-slate-500 dark:text-zink-200"><i data-lucide="clock" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{$post->created_at}}</span></p>
                                    <ul class="flex items-center gap-4 float-end">
                                        <li>
                                            <a href="{{ route('posts.show', $post->id) }}" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{$commentCount}} Comments</span></a>
                                        </li>
                                        <li>
                                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{$post->likes}} Likes</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                @include('shared.submit-comment')
                            </div>
                        </div><!--end card-->

                        @endforeach

                        {{$posts->links()}}

                        <div class="flex justify-center mb-5">
                            <button type="button" id="load-more-btn" class="flex items-center text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                <svg class="size-4 ltr:mr-2 rtl:ml-2 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Load More
                            </button>
                        </div>

                    </div><!--end-->

                </div><!--end-->
            </div>
            <!-- container-fluid -->
        </div>
    </div>
@endsection


