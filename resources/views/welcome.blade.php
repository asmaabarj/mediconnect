
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right bg-slate-100 w-full z-10">
                    @auth
                       
                    <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                   
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-50  bg-[#18c29c] px-5 py-2 rounded-md hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 font-semibold bg-[#18c29c] px-4 py-2 rounded-md text-gray-50 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif

                    @endauth
                </div>
            @endif
            <div class="font-sans mt-16 text-[#fff]">
                <div class="grid lg:grid-cols-2 items-center gap-y-6 bg-[#218063]">
                  <div class="max-lg:order-1 max-lg:text-center sm:p-12 p-4">
                    <h2 class="lg:text-4xl text-3xl font-bold mb-4 lg:!leading-[56px]">In <span class="text-orange-500">MediConnect</span> Find a healthcare professional and make an appointment <span class="text-orange-500">online!</span></h2>
                    <p class="mt-4 text-base leading-relaxed">Fast, free and secure</p>
                    <button type='button'
                      class="bg-transparent hover:bg-orange-600 border-2 border-white mt-10 transition-all text-white font-bold text-sm rounded-md px-6 py-2.5">Get Started</button>
                  </div>
                  <div class="lg:h-[440px] flex items-center">
                    <img src="https://cdn.givingcompass.org/wp-content/uploads/2019/08/23110456/High-quality-Healthcare-Is-About-Trust.jpg" class="w-full h-full object-cover" alt="Dining Experience" />
                  </div>
                </div>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 px-4 my-12">
                  <div class="bg-gray-100 p-6 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6  rounded-md" fill="#18c29c"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
                    <h3 class="text-xl font-bold mb-2 text-[#333]">Consult a healthcare professional</h3>
                    <p class="text-sm text-[#333]">Filter by availability, agreement and location</p>
                  </div>
                  <div class="bg-gray-100 p-6 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6   rounded-md" fill="#18c29c"><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>
                    <h3 class="text-xl font-bold mb-2 text-[#333]">Make an appointment</h3>
                    <p class="text-sm text-[#333]">Directly online or by calling the healthcare professional</p>
                  </div>
                  <div class="bg-gray-100 p-6 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-6 w-6   rounded-md" fill="#18c29c"><path d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z"/></svg>
                    <h3 class="text-xl font-bold mb-2 text-[#333]">Your healthcare professional</h3>
                    <p class="text-sm text-[#333]">A reminder SMS with all practical information is sent the day before your appointment</p>
                  </div>
                  <div class="bg-gray-100 p-6 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-6 w-6  rounded-md" fill="#18c29c"><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/></svg>
                    <h3 class="text-xl font-bold mb-2 text-[#333]">Your safety</h3>
                    <p class="text-sm text-[#333]">Your data is protected thanks to our host approved by the Ministry of Health</p>
                  </div>
                </div>
              </div>
        </div>

<h1 class="text-center font-bold text-2xl text-gray-700 mt-20"><U>OUR DIFFERENT SPECIALITIES</U></h1>
        <div class="grid grid-cols-2 md:grid-cols-5  text-center font-semibold text-gray-800 justify-items-center m-16 mx-52 gap-y-12">
          <div>
					<div class=""><span><img  width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon2-1.png" alt="" ></span></a></div>
						<h4>Cardiology</a></h4>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon3-1.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-294 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon3-1.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-294&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon3-hover_.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Dental</a></h4>	
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon4-1.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-296 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon4-1.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-296&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon4-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">

              Dermatologists</a></h4>
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon-13.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-286 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon-13.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-286&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon13-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Pediatrician

            </a></h4>	
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon6.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-299 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon6.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-299&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon6-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Gastrology</a></h4>						
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon7.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-301 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon7.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-301&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon7-hover_.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">
              Generalist</a></h4>						
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon8.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-303 et-animated" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon8.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-303&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon8-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}"></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Gynecology</a></h4>					
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon9.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-305 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon9.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-305&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon9-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Kinesitherapeute</a></h4>
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon11.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-308 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon11.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-308&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon11-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Ophthalmologist</a></h4>
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon-5.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-284 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon-5.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-284&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon5-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Endocrinology
            </a></h4>
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon12.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-310 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon12.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-310&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon12-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Orl</a></h4>	
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon14.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-313 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon14.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-313&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon14-hover_.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Pneumology </a></h4>	
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon1_.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-290 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon1_.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-290&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon1-hover_.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Psychologist</a></h4>			
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon-16.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-287 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon-16.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-287&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon16-hover_.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Rhumataulogue

            </a></h4>					
					</div>
        </div>
        <div>
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img loading="lazy" decoding="async" width="128" height="128" src="https://pratisoft.ma/wp-content/uploads/2023/03/icon-10.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-285 et-animated et_multi_view_swapped et_multi_view_image__loaded" data-et-multi-view="{&quot;schema&quot;:{&quot;attrs&quot;:{&quot;desktop&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon-10.png&quot;,&quot;class&quot;:&quot;et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-285&quot;,&quot;alt&quot;:&quot;&quot;},&quot;hover&quot;:{&quot;src&quot;:&quot;https:\/\/pratisoft.ma\/wp-content\/uploads\/2023\/03\/icon10-hover.png&quot;}}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" srcset="" sizes=""></span></a></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header">Neurologist</a></h4>			
					</div>
</div>
</div>



        <div class="bg-gray-100 p-8 font-[sans-serif]">
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-300">
              <h2 class="text-3xl font-extrabold text-[#218063]">Frequently Asked Questions</h2>
              <p class="text-gray-600 mt-4 text-sm">Explore our comprehensive FAQ to find answers to common queries.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-6">
              <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-[#18c29c] mb-2">How can I create an account?</h3>
                <p class="text-gray-600 text-sm">Creating an account is easy! Click on the "Sign Up" button and follow the simple steps to get started.</p>
              </div>
              <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-[#18c29c] mb-2">Is there a mobile app available?</h3>
                <p class="text-gray-600 text-sm">Yes, we offer a mobile app for both iOS and Android. Visit the App Store or Google Play to download it.</p>
              </div>
              <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-[#18c29c] mb-2">How can I reset my password?</h3>
                <p class="text-gray-600 text-sm">To reset your password, go to the login page and click on the "Forgot Password" link. Follow the instructions sent to your email.</p>
              </div>
            </div>
          </div>
        </div>


        <footer class="font-[sans-serif] bg-[#213343] py-8 px-10">
          <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8 pb-8 border-b border-[#FFA726]">
            <li>
              <h3 class="text-[#FFA726] font-semibold text-5xl">3+</h3>
              <p class="text-gray-300 text-sm mt-2">Years of Experience</p>
            </li>
            <li>
              <h3 class="text-[#FFA726] font-semibold text-5xl">99%</h3>
              <p class="text-gray-300 text-sm mt-2">Happy Customers</p>
            </li>
            <li>
              <h3 class="text-[#FFA726] font-semibold text-5xl">150+</h3>
              <p class="text-gray-300 text-sm mt-2">Consultations</p>
            </li>
            <li>
              <h3 class="text-[#FFA726] font-semibold text-5xl">50+</h3>
              <p class="text-gray-300 text-sm mt-2">Doctors</p>
            </li>
          </ul>
          <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
            <div>
              <img src="{{ asset('storage/images/' . 'logo.png') }}" alt="logo" class='w-60 mt-10 justify-center' />
            </div>
            <div>
              <h4 class="text-[#FFA726] font-semibold text-lg mb-4">Services</h4>
              <ul class="space-y-3">
                <li>
                  <a href="javascript:void(0)" class="hover:text-[#FFA726] text-gray-300 text-sm">Consult a healthcare professional</a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="hover:text-[#FFA726] text-gray-300 text-sm">Make an appointment</a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="hover:text-[#FFA726] text-gray-300 text-sm">Your healthcare professional</a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="hover:text-[#FFA726] text-gray-300 text-sm">Your safety</a>
                </li>
              </ul>
            </div>
            <div >
              <h4 class="text-[#FFA726] font-semibold ml-10 text-lg mb-4">Specialities</h4>
              <div class="gap-y-4 grid grid-cols-3 mr-20">
              
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Generalist</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Cardiology</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Gynecology</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Ophthalmologist</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm ml-6">Dental</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Endocrinology</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Pneumology</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Psychologist</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Gastrology</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Rhumataulogue</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm ml-6">orl</p>
                  <p class="hover:text-[#FFA726] text-gray-300 text-sm">Neurologist</p>

              </div>
            </div>
            
          </div>
          <p class='text-gray-300 text-sm text-center mt-16'>© 2024<a href='' target='_blank'
            class="hover:underline mx-1">MediConnect</a>All Rights Reserved.
          </p>
        </footer>
    </body>
</html>
