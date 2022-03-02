@extends('layouts.site')

@section('content')
    <main class="main-container">

        <div class="grid gap-5 lg:grid-cols-3">

            <!-- left side -->
            <div class="space-y-5">

                <!-- user block -->
                <div class="shadow rounded-xl overflow-hidden">

                    <!-- cover -->
                    <div class="h-32 bg-indigo-500"></div>

                    <!-- user -->
                    <div class="pt-14 p-7 bg-white relative">

                        <!-- role -->
                        <span class="badge bg-indigo-500">[role]</span>

                        <!-- avatar -->
                        <a href="#"><img src="{{ asset('images/avatar.png') }}" alt="Avatar" class="avatar"></a>

                        <!-- name -->
                        <div class="title">[name]</div>

                        <!-- email -->
                        <div class="text-sm text-gray-400">[email]</div>

                        <!-- phone number -->
                        <div class="text-sm text-gray-400 mb-7">[phone number]</div>

                        <!-- contacts -->
                        <div class="flex flex-col space-y-4 mt-2">

                            <!-- social midia -->
                            <ul class="social-midia">
                                <li>
                                    <a href="#" class="text-gray-500">
                                        <i class='bx bxl-gmail text-2xl'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="text-gray-500">
                                        <i class='bx bxl-whatsapp text-2xl'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="text-gray-500">
                                        <i class='bx bxl-skype text-2xl'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500">
                                        <i class='bx bxl-github text-2xl'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500">
                                        <i class='bx bxl-linkedin text-2xl'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="text-gray-500">
                                        <i class='bx bxl-instagram text-2xl'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- end user block -->

                <!-- skills -->
                <div class="card">
                    <h2 class="title">{{ trans('locale.skills') }}</h2>
                    <div class="-m-2 flex flex-wrap py-2">
                        <span class="tag bg-indigo-100 text-indigo-700">[programming language]</span>
                    </div>
                </div>
                <!-- end skills -->

                <!-- information -->
                <div class="card">

                    <h2 class="title">{{ trans('locale.information') }}</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <div class="text-gray-400">{{ trans('locale.country') }}</div>
                            <div class="subtitle">[country]</div>
                        </div>
                    </div>
                </div>
                <!-- end information -->

                <!-- languages -->
                <div class="card">
                    <h2 class="title">{{ trans('locale.languages') }}</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <div class="text-gray-400">{{ trans('locale.en') }}</div>
                            <div class="subtitle">[level]</div>
                        </div>
                    </div>
                </div>
                <!-- end languages -->

            </div>
            <!-- end left side -->

            <!-- start right side -->
            <div class="space-y-5 lg:col-span-2">

                <!-- about me -->
                <div class="card">

                    <h2 class="title">{{ trans('locale.presentation') }}</h2>
                    <p class="text-gray-600 mb-5 text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores unde ea necessitatibus, ducimus
                        placeat, quam omnis reiciendis possimus saepe illo labore accusantium, impedit hic. Natus totam
                        nesciunt veritatis et nostrum.
                    </p>

                </div>

                <!-- start experience -->
                <div class="content-block">

                    <h2 class="title">{{ trans('locale.experience') }}</h2>

                    <!-- experience item -->
                    <div class="py-4">
                        <div class="block-item">
                            <div class="col-span-3">
                                <div class="flex flex-start">
                                    <div class="flex-none">
                                        <div class="company-logo bg-indigo-400 text-indigo-100">
                                            <i class='bx bx-building-house bx-sm'></i>
                                        </div>
                                    </div>

                                    <!-- company / function -->
                                    <div class="flex-grow pl-2">
                                        <span class="subtitle">[role]</span>
                                        <div class="flex space-x-5">
                                            <div class="item-info">
                                                <i class='bx bx-buildings'></i>
                                                <span>[company name]</span>
                                            </div>
                                            <div class="item-info">
                                                <i class='bx bx-map'></i>
                                                <span>[city]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- period -->
                            <div>
                                <div class="block-item-right">
                                    <div class="item-right-badge bg-indigo-100 text-indigo-700">
                                        [period]
                                    </div>
                                    <div class="item-info lg:mt-1 md:mt-1">
                                        <i class='bx bx-calendar'></i>
                                        <span>[period]</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- description -->
                        <p class="text-gray-600 text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad sapiente temporibus dolorem nam eum
                            illo quis minus, maxime error corrupti possimus officia voluptas necessitatibus aliquid
                            voluptatem! Illum perspiciatis harum sit!
                        </p>

                        <!-- tags -->
                        <div class="py-4">
                            <span class="subtitle">{{ trans('locale.stack') }}</span>
                            <div class="-m-2 flex flex-wrap pt-2">
                                <span class="tag bg-indigo-100 text-indigo-700">[programming language]</span>
                            </div>
                        </div>

                        <!-- divider -->
                        <div class="divider"></div>

                    </div>
                    <!-- end experience item -->

                </div>
                <!-- end expirience -->

                <!-- start education -->
                <div class="content-block">

                    <h2 class="title">{{ trans('locale.education') }}</h2>

                    <!-- education item -->
                    <div class="py-4">
                        <div class="block-item">
                            <div class="col-span-3">
                                <div class="flex flex-start">
                                    <div class="flex-none">
                                        <div class="company-logo bg-indigo-400 text-indigo-100">
                                            <i class='bx bx-book bx-sm'></i>
                                        </div>
                                    </div>

                                    <!-- organization -->
                                    <div class="flex-grow pl-2">
                                        <span class="subtitle">[course name]</span>
                                        <div class="flex space-x-5">
                                            <div class="item-info">
                                                <i class='bx bx-buildings'></i>
                                                <span>[organization]</span>
                                            </div>
                                            <div class="item-info">
                                                <i class='bx bx-map'></i>
                                                <span>[city]</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- year -->
                            <div>
                                <div class="block-item-right">
                                    <div class="item-info lg:mt-1 md:mt-1">
                                        <i class='bx bx-calendar'></i>
                                        <span>[year]</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end education item -->

                </div>
                <!-- end education -->

            </div>
            <!-- end right side -->
    </main>
@endsection
