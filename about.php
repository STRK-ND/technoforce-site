﻿<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>SkillUpRise</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">
<?php include('./components/nav.php'); ?>

  <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
      <h2>About Us</h2>
      <nav>
        <ol class="flex items-center justify-center space-x-3">
          <li class="breadcrumb-item"><a href="./index.php">Home </a></li>
          <li class="breadcrumb-item">-</li>
          <li class="text-primary">About Us</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- about area start -->
  <div class="about-area  section-padding-top pb-16 relative z-[1]">
    <div class=" absolute right-[7%] top-[20%] z-[-1] hidden xl:block"><img src="assets/images/icon/h.svg" alt="">
    </div>
    <div class="container">
      <div class="grid grid-cols-12 xl:gap-[70px] lg:gap-10 gap-6">
        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
          <img src="assets/images/all-img/about5.png" alt="">
        </div>
        <div class="xl:col-span-5 lg:col-span-6 col-span-12 ">
          <div class="mini-title">About Technoforce Institute</div>
          <h4 class="column-title ">
            You Can Learn Anything, Anytime From
            <span class="shape-bg">
                        Anywhere</span>
          </h4>
          <div>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
          </div>
          <ul class=" list-item space-y-6 pt-8">
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="h-20 w-20 rounded-full bg-white  shadow-box10 flex flex-col justify-center items-center">
                  <img src="assets/images/icon/video.svg" alt="" class="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-xl mb-1">All Classes Video Provided</h4>
                <div>There are many variations of passages of the Lorem Ipsum available.</div>
              </div>
            </li>
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="h-20 w-20 rounded-full bg-white  shadow-box10 flex flex-col justify-center items-center">
                  <img src="assets/images/icon/web-white.svg" alt="" class=" ">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-xl mb-1">Online Class From Expert Teachers</h4>
                <div>There are many variations of passages of the Lorem Ipsum available.</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- topics start -->
  <div class=" section-padding-bottom">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Start Learning From Today</div>
        <div class="column-title ">
          Popular
          <span class="shape-bg">Topics</span>
          To Learn
        </div>
      </div>
      <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[30px] lg:pt-10 pt-5">


        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFE8E8]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFE8E8]">
            <img src="assets/images/icon/t1.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Data Science</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-green-paste  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-green-paste">
            <img src="assets/images/icon/t2.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">UI/UX Design</h4>
            <p>UI/UX Design</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E8F5FF]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E8F5FF]">
            <img src="assets/images/icon/t3.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Modern Physics</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E3F9F6]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E3F9F6]">
            <img src="assets/images/icon/t4.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Music Production</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#EEE8FF]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#EEE8FF]">
            <img src="assets/images/icon/t5.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Data Science</h4>
            <p>45 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFF6EB]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFF6EB]">
            <img src="assets/images/icon/t6.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Finances</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E8FFEA]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E8FFEA]">
            <img src="assets/images/icon/t7.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Global Science</h4>
            <p>75 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFE8E8]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFE8E8]">
            <img src="assets/images/icon/t8.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Game Design</h4>
            <p>12 Courses</p>
          </div>
        </a>

      </div>
    </div>
  </div>
  <!-- platform start -->
  <div class="bg-[url('../images/all-img/section-bg-2.png')] bg-cover bg-no-repeat bg-center section-padding">
    <div class="container">
      <div class="lg:grid grid-cols-12 gap-[30px]">
        <div class="xl:col-span-5 lg:col-span-6 col-span-12">
          <div class="mini-title">Best Online Learning Platform</div>
          <h4 class="column-title ">
            One Platfrom & Many
            <span class="shape-bg">
                        Courses</span>
            For You
          </h4>
          <div>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
          </div>
          <ul class=" space-y-2 pt-8">
            <li class="flex flex-wrap">
              <div class="flex-none mr-3">
                <div class="">
                  <img src="assets/images/svg/ok.svg" alt="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-lg mb-1 font-semibold">9/10 Average Satisfaction Rate</h4>
              </div>
            </li>
            <li class="flex flex-wrap">
              <div class="flex-none mr-3">
                <div class="">
                  <img src="assets/images/svg/ok.svg" alt="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-lg mb-1 font-semibold">96% Completitation Rate</h4>
              </div>
            </li>
            <li class="flex flex-wrap">
              <div class="flex-none mr-3">
                <div class="">
                  <img src="assets/images/svg/ok.svg" alt="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-lg mb-1 font-semibold">Friendly Environment & Expert Teacher</h4>
              </div>
            </li>
          </ul>
          <div class="pt-8">
            <a href="#" class=" btn btn-primary">Explore Our Courses</a>
          </div>
        </div>
        <div class="xl:col-span-7 lg:col-span-6 col-span-12 lg:pt-0 md:pt-10 pt-6">
          <img src="assets/images/all-img/about2.png" alt="" class=" mx-auto block w-full">
        </div>
      </div>
    </div>
  </div>
  <!-- course block start -->
  <div class=" section-padding  bg-white bg-[url('../images/all-img/section-bg-14.png')] bg-center  bg-no-repeat">
    <div class="container">
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-7">
        <div class="bg-[url('../images/all-img/bg-ins-1.png')] bg-cover  bg-no-repeat p-10  rounded-md">
          <div class="max-w-[337px]">
            <div class="mini-title">Build Your Career</div>
            <div class=" text-[34px] text-black leading-[51px]">
              Become an
              <span class="shape-bg">Instructor</span>
            </div>
            <div class=" mt-6 mb-12">
              Learn at your own pace, move the between multiple courses.
            </div>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
        <div class="bg-[url('../images/all-img/bg-ins-2.png')]  bg-no-repeat p-10 bg-cover rounded-md">
          <div class="max-w-[337px]">
            <div class="mini-title">Build Your Career</div>
            <div class=" text-[34px] text-black leading-[51px]">
              Get Free
              <span class="shape-bg">Courses</span>
            </div>
            <div class=" mt-6 mb-12">
              Learn at your own pace, move the between multiple courses.
            </div>
            <a href="./contact.php" class="btn btn-black">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- video area -->
  <div class=" relative video-area section-padding-bottom z-[1]">
    <div class="bg-[url('../images/all-img/section-bg-7.png')] bg-cover bg-no-repeat bg-center absolute left-0 bottom-0 h-[60%]
        w-full z-[-1]"></div>
    <div class="container ">
      <div class="video-wrapper xl:mb-[205px] lg:mb-[150px] mb-20">
        <div class="xl:h-[652px] lg:h-[500px] h-[400px] max-w-[1112px]  mx-auto p-6 bg-white shadow-box8 rounded-lg relative ">
          <img src="assets/images/all-img/video.png" alt="" class=" object-cover w-full h-full  block">
          <div class="h-[80px] w-[80px] mx-auto absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 flex flex-col justify-center
                        items-center">
            <div class="animate-ping absolute inline-flex h-full w-full rounded-full ring-white ring-2"></div>
            <a href="#" class="bg-white w-20 h-20 flex flex-col justify-center items-center rounded-full text-3xl text-primary  ">
              <iconify-icon icon="bi:play-fill"></iconify-icon>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="text-center text-black text-2xl font-medium mb-[50px]">
        <span class=" shape-bg mini">Trusted</span>
        By 1000+ Companies
      </div>

      <ul class="flex flex-wrap items-center lg:justify-between justify-center  ">

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/1.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/2.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/3.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/4.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/5.svg" alt=""></a>
        </li>

      </ul>
    </div>
  </div>
  <!-- team start -->
  <div class=" section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Team Member</div>
        <div class="column-title ">
          Our Expert
          <span class="shape-bg">Instructors</span>
        </div>
      </div>
      <div class="grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">


        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team1.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold"><a href="./instructor-details.php">Erics Widget</a></h4>
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team2.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold"><a href="./instructor-details.php">Daniel Steven</a></h4>            
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team3.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold"><a href="./instructor-details.php">Nelson Decosta</a></h4>
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team4.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold"><a href="./instructor-details.php">Selina Gomez</a></h4>            
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- cta start -->
  <!-- <div class="bg-[url('../images/all-img/section-bg-3.png')] bg-cover bg-no-repeat bg-center py-20">
    <div class="container">
      <div class="lg:flex lg:items-center lg:space-x-[70px]">
        <div class=" flex-none">
          <div class="flex items-center space-x-8 text-white max-w-[327px] mx-auto lg:mb-0 md:mb-10 mb-5">
            <div class=" flex-none ">
              <img src="assets/images/svg/big-mail.svg" alt="">
            </div>
            <div class="flex-1 lg:text-[34px] lg:leading-[51px] md:text-3xl text-2xl font-bold">
              Subscribe to My Newsletter
            </div>
          </div>
        </div>
        <div class=" flex-1">
          <div class="md:flex   items-center  relative md:space-x-6 md:space-y-0  space-y-4   ">
            <div class="flex-1 relative">
              <span class=" absolute left-0 top-1/2 -translate-y-1/2 ">
                            <img src="assets/images/icon/mail-white.svg" alt="">
                        </span>
              <input type="text" placeholder="Enter your mail address" class=" border-b border-t-0 border-l-0 border-r-0 border-[#B2E2DF] ring-0 focus:ring-0 bg-transparent text-white
                                placeholder:text-[#B2E2DF] focus:outline-0 focus:border-[#B2E2DF] transition pl-8 text-lg">
            </div>
            <div class="flex-none">
              <button class="btn bg-white  text-secondary md:w-auto w-full">Get Started Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- footer start -->
  <?php include('./components/footer.php'); ?>

  <div class="rt-mobile-menu-overlay"></div>
  <!-- scripts -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/rt-plugins.js"></script>
  <script src="../../../phosphor-icons%401.4.2/src/index.js"></script>
  <script src="../../../iconify-icon/1.0.0/iconify-icon.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>