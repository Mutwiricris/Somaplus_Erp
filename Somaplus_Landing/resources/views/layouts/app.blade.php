<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/App.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        <style>
.box {
  width: 200px;
  height: 50px;
}
/* .box:hover{
  border: 2px  black;
  box-shadow: 5px 5px gray ;
  transition: ease-in 2ms;
} */
.m-b {
    background-color: #ffffff;
    height: 100vh;
    background-image:
        radial-gradient(at 47% 33%, hsl(288.92, 100%, 87%) 0, transparent 59%),
        radial-gradient(at 82% 65%, hsl(271.91, 99%, 54%) 0, transparent 55%);
    background-size: cover;
    background-size: cover;
}
.rect{
    height: 50vh;
}
.img {
    width: 80vw;
    animation: scroll 6s linear infinite;
    height: auto;
    white-space: nowrap; /* Prevents wrapping */

}
.mocku{
    width: 39vw;

}
.checks ul{
    list-style-image: url('check.svg');
    list-style-type: none; /* Remove default bullet */
    padding-left: 20px; /* Adjust the padding for the text */
.checks ul li{
    list-style-image: url(./fonts./svgs/solid/check.svg);

}
.slide-track {
    width: 100%;
    display: flex;
    gap: 3em;
    overflow: hidden;
}


.slider {

    padding: 20px;
}

@keyframes scroll {
    from {
        transform: translateX(1000%);
    }
    to {
        transform: translateX(-1000%);
    }
}
.list{
  text-align: start;
    list-style: none;
    list-style-image: url('./fonts./svgs/solid/check.svg'); /* Remove default bullet */
    padding-left: 20px; /* Adjust the padding for the text */
}
}
.urefu{
    height: fit-content;
};

        </style>
    </head>
    <body class="antialiased ">
<!--         
{{--navigation Bar--}}
{{--    Sticky Navigation bar with border shadow on scrool down--}} -->
<!--Homepage layout-->
<div class="m-b">
<nav class="nav lg-container m-2 h-max 0 flex items-center justify-between">
<div class="flex m-5 items-center ">
   <a href="/" class="flex items-center " >
       <img src={{asset('Images/Logo1.png')}} class="h-20 w-20" alt="logo"/>
       <h1 class="text-3xl  font-semibold text-purple-700"> Somaplus</h1>
   </a>
    <div class="ml-7">
        <ul class="flex  text-lg font-md items-center">
            <a href="#"><li class="ml-7">Home</li></a>
               <a href="#"><li class="ml-7">Features</li></a>
                   <a href="#"><li class="ml-7">Pricing</li></a>
                       <a href="#"><li class="ml-7">Customers</li></a>
                           <a href="#"><li class="ml-7">Solution <i class="fa-solid fa-caret-down"></i></li></a>
                               <a href="#">  <li class="ml-7">contact</li></a>
        </ul>
    </div>
</div>
    <div class="pr-4">
        <button class=" font-bold w-56 text-lg mr-4 h-16 border-2 border-black shadow-2xl transition duration-200 ease-in hover:border-purple-500 hover:shadow-gray border border-gray-400 h-15 p-3 ">Book a Demo</button>
        <button class=" w-56 h-16 text-white font-bold text-lg bg-purple-700 border-2 border-black shadow-2xl transition duration-200 ease-in hover:border-purple-500 hover:shadow-gray border p-3 border-gray-400 ">Start a free trial</button>
    </div>
</nav>
{{-- //body => home --}}
<div class="flex ml-20 items-center h-3/4 w-full justify-center ">
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

    <!-- {{--        //content space and features  of the product--}} -->
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

    <!-- {{--        //////////features of the product cards--}} -->
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
    <!-- {{--        //contact us--}} -->
    <div class="flex items-center mt-16 justify-center flex-col font-medium" >
        <h1 class="text-2xl font-extrabold">
            Find out if our system works for your school
        </h1>
        <p  class="underline">
            <a href="#">Talk to one of our experts  <i class="fa-solid fa-arrow-right w-7 "></i> </a>
        </p>

    </div>

    <!-- {{--        ///////////talk to us///////////////--}} -->
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

<footer class="bg-purple-700 text-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="p-4 mb-6 md:mb-0 flex flex-col text-center">
            <a href="/" class="flex items-center mb-4 " >
       <img src={{asset('Images/Logo1.png')}} class="h-20 w-20" alt="logo"/>
       <h1 class="text-3xl  font-semibold "> Somaplus</h1>
   </a>
                <div class="flex mb-4 mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                <i class="fa-brands fa-facebook text-2xl mr-3"></i>
                </a>
                
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                <i class="fa-brands fa-instagram text-2xl mr-3"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                <i class="fa-brands fa-x-twitter text-2xl mr-3"></i>
                </a>
               
            </div> 
            
            <div class="text-lg text-white font-medium ">
                <ul >
                    <li  class="mb-3">
                        <a href="#">Our Team</a>
                    </li>
                    <li class="mb-3">
                        <a href="#">Customers</a>
                    </li>
                    <li class="mb-3">
                        <a href="#">Solutions</a>
                    </li>
                </ul>
            </div>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase dark:text-white">Features</h2>
                    <ul class=   "dark:text-gray-400 font-semibold">
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Student Admissions</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Financial management</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Exam Management</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Transport Management</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Digital Library</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Teacher Management</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Techers Portal</a>
                        </li>
                        <li class="mb-4  ">
                            <a href="https://flowbite.com/" class="hover:underline">Student portal/Quardian portal</a>
                        </li>
                     
                    </ul>
                </div>
                <div>
                   
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">resources</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Director Portal</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Managers portal</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Pricing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline"> Contact us</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Book a Demo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex flex flex-col sm:items-center sm:justify-center">
                <!-- contact,support -->
                <div class="flex text-sm mb-4">
                <p> Email: <a href="/" class="hover:underline mr-3">sales.somaplus@gmail.com</a></p>
                <p>Phone: <a href="/" class="hover:underline">+25411 040 7501</a></p>

                </div>
        <div class="text-center text-sm ">        
          <span class="text-sm text-white sm:text-center dark:text-gray-400">
              <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script>               
          </span>
              <a href="/" class="hover:underline">Somaplus™</a>. All Rights Reserved. <a href="#" class="underline">Privacy Policy</a>
          </span>
          <p class="mt-2">
          sinket Arcade 2nd Floor,Yukos.
            <span>
                Kitengela,Kajiado
            </span>
          </p>
        </div>
           
        </div>
    </div>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

