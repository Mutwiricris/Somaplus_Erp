@extends('layouts.app')
@section('content')

<div class="flex ml-20 items-center h-3/4 w-full justify-center">
        {{--            //messange--}}
        <div class="flex flex-col">
            <h1 class="text-6xl font-extrabold 	 ">DIGITIZE YOUR SCHOOL <br>
                <span class="leading-loose">
                        OPERATIONS
                    </span>
            </h1>
            <p class=" font-roboto text-lg font-itallic font-md m-4">
                Somaplus enables individual schools to be able to offer custom made learning guidelines, <br> quizzes
                and assignments / tests that enable each school to be <br>able to offer quality learning as per each
                standards
                <a href="#" class=" ml-3 text-purple-900">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </p>
            <div class="mt-11">
                <button class=" font-bold w-56 text-lg mr-4 h-16 border-2 border-black shadow-2xl transition duration-200 ease-in hover:border-purple-500 hover:shadow-gray border border-gray-400 h-15 p-3 ">Book a Demo</button>
                <button class=" w-56 h-16 text-white font-bold text-lg bg-purple-700 border-2 border-black shadow-2xl transition duration-200 ease-in hover:border-purple-500 hover:shadow-gray border p-3 border-gray-400 ">Start a free trial</button>
            </div>
            {{--                     Rating--}}
            <div class="flex items-center pt-16">
                <div class=" flex items-center mr-4">
                    <p> <i class="fa-brands fa-google-play purple-600 mr-2"></i> Google play </p>
                    <span class="mr-2 text-yellow-700 ">
                            <i class="fa-solid fa-star text-sm "></i>
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star-half-stroke "></i>
                        </span>
                    <span> 4.5</span>
                </div>
                <div class=" flex items-center">
                    <p> <i class="fa-brands fa-facebook text-blue-600 mr-2"></i> Facebook </p>
                    <span class="text-sm text-yellow-700 mr-2">
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star "></i>
                        <i class="fa-solid fa-star-half-stroke "></i>
                        </span>
                    <span>4.8</span>
                </div>
            </div>
        </div>
        {{--            //illustation ofn the project--}}
        <div class="">
            <img src={{asset('Images/bgfree.png')}} class="h-54 w-3/4" alt="logo"/>
        </div>
    </div>

    {{--    //our clients schools in kenya--}}
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

    {{--        //content space and features  of the product--}}
    <div class=" bg-purple-600  w-full">
        <div class="flex leading-10 text-center font-sans text-white flex-col items-center rect h-inherit justify-center">
            <h2 class="text-4xl font-semibold ">
                Create your own dream class
            </h2>
            <p class="text-2xl mt-3 leading-loose" >
                Manage all of your processes efficiently, regardless of the <br> <span class="mt-3"> size of your educational institution.</span>
            </p>
        </div>
    </div>

    {{--        //////////features of the product cards--}}
    <div class="relative bg-white  w-2/3 mx-auto -mt-20 urefu border border-gray-600 rounded-lg shadow-lg ">
        <div class="flex leading-10 text-center font-sans text-white flex-col items-center  h-inherit justify-center">
            <div class="flex items-center m-11 p-16">

                <div class=" checks flex items-start  leading-loose text-gray-800 mr-7 flex-col justify-start ">
                    <h1 class="text-3xl font-semibold pb-11 ">Students & Admissions</h1>
                    <ul class="leading-">
                        <li class="flex items-center leading-loose text-xl mr-2" ><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list text-xl">Register new students or add new ones, in seconds; </p></li>
                        <li class="flex items-center leading-loose text-xl mr-2"> <i class="fa-solid fa-check mr-3 text-2xl"></i><p class="list"> Create grading periods and produce automated gradebooks, keeping everyone updated </p></li>
                        <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Update student and guardian information, through student profiles </p></li>
                        <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Keep students updated on attendance, performance, timetables, payments and incoming communications through their own portal</p> </li>
                    </ul>

                    <a class="text-lg font-semibold text-purple-700 mt-8" href="#"> Read More <i class="fa-solid fa-arrow-right  "></i></a>

                </div>
                <div>
                    <img src={{asset('Images/adm1.png')}} class="mocku" alt="logo"/>

                </div>
            </div>

        </div>
    </div>

    <div class="flex items-center justify-center flex-col">
        <div class="mt-8 bg-white  w-2/3  urefu border border-gray-600 rounded-lg shadow-lg ">
            <div class="flex leading-10 text-center font-sans text-white flex-col items-center  h-inherit justify-center">
                <div class="flex items-center m-11 p-16">

                    <div class=" checks flex items-start  leading-loose text-gray-800 mr-7 flex-col justify-start ">
                        <h1 class="text-3xl font-semibold pb-11 ">Students & Admissions</h1>
                        <ul class="leading-">
                            <li class="flex items-center leading-loose text-xl mr-2" ><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list text-xl">Register new students or add new ones, in seconds; </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"> <i class="fa-solid fa-check mr-3 text-2xl"></i><p class="list"> Create grading periods and produce automated gradebooks, keeping everyone updated </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Update student and guardian information, through student profiles </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Keep students updated on attendance, performance, timetables, payments and incoming communications through their own portal</p> </li>
                        </ul>

                        <a class="text-lg font-semibold text-purple-700 mt-8" href="#"> Read More <i class="fa-solid fa-arrow-right  "></i></a>

                    </div>
                    <div>
                        <img src={{asset('Images/adm1.png')}} class="mocku" alt="logo"/>

                    </div>
                </div>

            </div>
        </div>
        <div class="mt-8 bg-white  w-2/3  urefu border border-gray-600 rounded-lg shadow-lg ">
            <div class="flex leading-10 text-center font-sans text-white flex-col items-center  h-inherit justify-center">
                <div class="flex items-center m-11 p-16">

                    <div class=" checks flex items-start  leading-loose text-gray-800 mr-7 flex-col justify-start ">
                        <h1 class="text-3xl font-semibold pb-11 ">Students & Admissions</h1>
                        <ul class="leading-">
                            <li class="flex items-center leading-loose text-xl mr-2" ><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list text-xl">Register new students or add new ones, in seconds; </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"> <i class="fa-solid fa-check mr-3 text-2xl"></i><p class="list"> Create grading periods and produce automated gradebooks, keeping everyone updated </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Update student and guardian information, through student profiles </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Keep students updated on attendance, performance, timetables, payments and incoming communications through their own portal</p> </li>
                        </ul>

                        <a class="text-lg font-semibold text-purple-700 mt-8" href="#"> Read More <i class="fa-solid fa-arrow-right  "></i></a>

                    </div>
                    <div>
                        <img src={{asset('Images/adm1.png')}} class="mocku" alt="logo"/>

                    </div>
                </div>

            </div>
        </div>
        <div class="mt-8 bg-white  w-2/3  urefu border border-gray-600 rounded-lg shadow-lg ">
            <div class="flex leading-10 text-center font-sans text-white flex-col items-center  h-inherit justify-center">
                <div class="flex items-center m-11 p-16">

                    <div class=" checks flex items-start  leading-loose text-gray-800 mr-7 flex-col justify-start ">
                        <h1 class="text-3xl font-semibold pb-11 ">Students & Admissions</h1>
                        <ul class="leading-">
                            <li class="flex items-center leading-loose text-xl mr-2" ><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list text-xl">Register new students or add new ones, in seconds; </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"> <i class="fa-solid fa-check mr-3 text-2xl"></i><p class="list"> Create grading periods and produce automated gradebooks, keeping everyone updated </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Update student and guardian information, through student profiles </p></li>
                            <li class="flex items-center leading-loose text-xl mr-2"><i class="fa-solid fa-check mr-3 text-2xl"></i> <p class="list">Keep students updated on attendance, performance, timetables, payments and incoming communications through their own portal</p> </li>
                        </ul>

                        <a class="text-lg font-semibold text-purple-700 mt-8" href="#"> Read More <i class="fa-solid fa-arrow-right  "></i></a>

                    </div>
                    <div>
                        <img src={{asset('Images/adm1.png')}} class="mocku" alt="logo"/>

                    </div>
                </div>

            </div>
        </div>

    </div>
    {{--        //contact us--}}
    <div class="flex items-center mt-16 justify-center flex-col font-medium" >
        <h1 class="text-2xl font-extrabold">
            Find out if our system works for your school
        </h1>
        <p  class="underline">
            <a href="#">Talk to one of our experts  <i class="fa-solid fa-arrow-right w-7 "></i> </a>
        </p>

    </div>

    {{--        ///////////talk to us///////////////--}}
    <div class="mt-7">
        <div class="h-1/3 flex items-center justify-center bg-gray-200 h-auto">
            <figure class="flex flex-col justify-center bg-gray-50 m-11 rounded-3xl items-center p-8 text-center  border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to integrate</h3>
                    <p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this was to integrate within my application. Most templates are a pain, code is scattered, and near impossible to theme.</p>
                    <p class="my-4">Flowbite has code in one place and I'm not joking when I say it took me a matter of minutes to copy the code, customise it and integrate within a Laravel + Vue application.</p>
                    <p class="my-4">If you care for your time, I hands down would go with this."</p>
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Bonnie Green</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col justify-center  bg-gray-50 m-11 rounded-3xl  items-center p-8 text-center  border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to integrate</h3>
                    <p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this was to integrate within my application. Most templates are a pain, code is scattered, and near impossible to theme.</p>
                    <p class="my-4">Flowbite has code in one place and I'm not joking when I say it took me a matter of minutes to copy the code, customise it and integrate within a Laravel + Vue application.</p>
                    <p class="my-4">If you care for your time, I hands down would go with this."</p>
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Bonnie Green</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>

@endsection


