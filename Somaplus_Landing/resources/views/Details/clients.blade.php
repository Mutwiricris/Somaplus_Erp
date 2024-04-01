@extends('clients')
@section('clients')

<div class=" mt-64">
    {{--        //tilte--}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <div class="mb-8 text-center text-gray-900 dark:text-white ">
                <h2 class="font-extrabold lg:mb-16tracking-tight leading-tight  md:text-2xl text-2xl "> Schools That trust us</h2>
                <p class="text-xl "> Read more from our <a href="#" class="underline font-medium text-purple-800">Customer Stories</a> </p>
            </div>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                <a href="#" class="flex justify-center items-center">
                    <img src={{asset('Images/adm1.png')}} class="mockup" alt="logo"/>

                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src={{asset('Images/adm1.png')}} class="mockup" alt="logo"/>

                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src={{asset('Images/adm1.png')}} class="mockup" alt="logo"/>

                </a>

                <a href="#" class="flex justify-center items-center">
                    <img src={{asset('Images/adm1.png')}} class="mockup" alt="logo"/>

                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src={{asset('Images/adm1.png')}} class="mockup" alt="logo"/>

                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src={{asset('Images/adm1.png')}} class="mockup" alt="logo"/>

                </a>
            </div>
        </div>
    </section>
</div>

    
@endsection