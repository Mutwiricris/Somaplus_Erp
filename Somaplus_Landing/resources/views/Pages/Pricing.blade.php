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
        <link rel="Stylesheet" href="../css/Layout.css"/>
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
};

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
<div class="bg- h-3/4">
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

{{-- //contact-us form directly/comment --}}
<div class="fixed right-10 bottom-5 rounded-full flex items-center justify-center h-16 w-16 bg-purple-500" >
    <i class="fa-solid fa-message text-2xl text-gray-100"></i>
</div>
{{-- //pricing section --}}

<div class="flex flex-col items-center justify-center p-4 mb-11 leading-10 mt-28">
    <h1 class="text-4xl font-semibold mb-7">The plans includes all System features </h1>
    
    <button class="w-fit p-6 flex items-center justify-center rounded-lg  hover:ease-in-2s font-medium text-white text-xl shadow-xl h-16 bg-purple-400 hover:bg-purple-600 hover:text-gray-200"><a href="/Featutes">Explore Features </a></button>
   
</div>
<div class=" flex items-center flex-col justify-center mb-10 mt-10 ">
    <div class="w-96 h-14 bg-blue-50 rounded-full flex items-center justify-between border-2 border-blue-900">
        <h1 class="w-1/2 h-14 flex font-bold text-xl text-blue-900 items-center justify-center ">Pay Termly</h1>
        <h2 class="w-1/2 h-14 bg-blue-900 flex items-center  text-xl font-bold text-white justify-center rounded-full">Pay Yearly</h2>
    </div>
    <p class="text-2xl mt-7 font-semibold text-blue-950">Choose plan your preference </p> 
</div>
{{-- //////////pricing section and cards --}}
<div class=" flex items-center justify-center mb-16">
    <div class="h-fit p-11 flex justify-between shadow-2xl rounded-lg mr-16 shadow-red-50 flex-col bg-blue-100 border w-1/4 ">
        <div class="flex flex-col pl-11  mb-7 items-start justify-start">
            <h1 class=" font-semibold uppercase  text-green-900 text-2xl mb-4">Standard plan</h1>
            <span class="flex items-center justify-center h-fit p-2 bg-purple-100  text-purple-600 rounded-full text-sm  font-semibold w-fit "> Unlimited Students</span>
        </div>
<div class="flex flex-col  items-center justify-center">
   
    <div class="flex items-center mt-4 justify-center flex-col">
          
          <div class="text-center mb-6">
            <h1 class="font-bold flex mb-5 justify-start w-full text-2xl opacity-50 text-blue-600 line-through">
                Ksh 150
              </h1>
            <span class="text-6xl font-bold mb-2 text-blue-800 ">
                KSH 100
            </span>
            <p class="text-lg font-bold mb text-blue-700">Per student Per Term</p>
          </div>
          <div class="flex items-center  justify-center">
            <ul class="text-lg font-medium leading-10  italic text-green-800">
                <li> <i class="fa-solid fa-check mr-3 text-lg"></i>All <a href="Features" class="hover:underline ">features</a> included</li>
                <li> <i class="fa-solid fa-check mr-3 text-lg"></i>Free 24/7 Support</li>
                <li> <i class="fa-solid fa-check mr-3 text-lg"></i>Free Training</li>
               
                
            </ul>
          </div>
    </div>
    <button class="bg-purple-800  text-1/2 text-white mt-28 font-medium h-14 w-1/2">Get Started</button>

</div>

</div>

{{-- //////////next pricing card --}}
<div class="h-fit p-11 flex justify-between shadow-2xl rounded-lg  shadow-red-50 flex-col bg-blue-100 border w-1/4 ">
    <div class="flex flex-col pl-11  mb-7 items-start justify-start">
        <h1 class=" font-semibold text-green-900 mb-4 text-2xl uppercase">One Off Premium plan</h1>
        <span class="flex items-center justify-center h-fit p-2 bg-purple-100  text-purple-600 rounded-full text-sm  font-semibold w-fit "> Unlimited Students</span>
    </div>
<div class="flex flex-col  items-center justify-center">

<div class="flex mt-4 items-center justify-center flex-col">
      
      <div class="text-center mb-6">
        <h1 class="font-bold flex mb-5 justify-start w-full text-2xl opacity-50 text-blue-600 line-through">
            Ksh 450,000
          </h1>
        <span class="text-6xl font-bold mb-2 text-blue-800 ">
            KSH 350,000
        </span>
        <p class="text-lg font-bold  text-blue-700">One Off</p>
      </div>
      <div class="flex items-center  justify-center">
        <ul class="text-lg font-medium leading-10  italic text-green-800">
            <li> <i class="fa-solid fa-check mr-3 text-lg"></i>All features included</li>
            <li class="text-red-700"> <i class="fa-solid fa-x mr-3 text-sm text-red-700"></i>Free 24/7 Support</li>
            <li class="text-red-700"> <i class="fa-solid fa-x mr-3 text-sm text-red-700"></i>Free Training</li>
           
            
        </ul>
      </div>
</div>
<button class="bg-purple-800  text-1/2 text-white mt-28 font-medium h-14 w-1/2">Get Started</button>

</div>

</div>
</div>

<div class="flex items-center justify-center w-full pl-28   ">
        <div class="mb-3">
        <h1 class="text-3xl font-bold text-green-900">Features Available Plans </h1>
        <ul class=   "dark:text-gray-400 font-semibold leading-10 p-7">
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Student Admissions</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Financial management</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Exam Management</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Transport Management</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Digital Library</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Teacher Management</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Techers Portal</a>
            </li>
            <li class="mb-4  ">
                <a href="https://flowbite.com/" class="hover:underline text-xl text-green-800 font-mono"><i class="fa-solid fa-check mr-4 text-xl"></i>Student portal/Quardian portal</a>
            </li>
         
        </ul>
        </div>
        <div class="">
            <img src={{asset('Images/bgfree.png')}} class="w-1/2 mx-auto " alt="logo"/>

        </div>
</div>

<footer class="bg-purple-700  w-full  text-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="p-4 mb-6 md:mb-0 flex flex-col text-center">
            <a href="/" class="flex items-center mb-4 " >
       <img src={{asset('./Images/Logo1.png')}} class="h-20 w-20" alt="logo"/>
       <h1 class="textcontainer-3xl  font-semibold "> Somaplus</h1>
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

