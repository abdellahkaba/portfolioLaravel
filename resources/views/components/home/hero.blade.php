<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1
                        class="text-white dark:text-gray-200 mb-6 text-4xl font-bold leading-snug sm:text-[42px] lg:text-[40px] xl:text-[42px]"
                        >
                        Mon nom est Abdellah Kaba. <br />
                        Je suis <span class="rounded-md text-amber-600">TheMakcx</span>.
                    </h1>
                    <p class="mb-8 max-w-[520px] text-base text-white">
                        Je suis un développeur avec une année d'expérience. <br>
                        J'aime partager mes connaissances avec les autres sur mon github
                        {{-- <a
                            href="#Mon youtube"
                            class="text-primary font-bold no underline hover:underline underline-offset-2 decoration-2 decoration-primary"
                            >
                            Youtube
                        </a> --}}
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                Mes Projets
                            </x-button-link>
                        </li>
                        
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="text-body-color mb-4 dark:text-gray-300 flex items-center text-xs font-normal">
                          Suivez-moi sur les réseaux sociaux
                          <span class="bg-body-color ml-2 inline-block h-[1px] w-8"></span>
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img
                            src="{{ url('/img/image1.jpg') }}"
                            alt="hero"
                            class="max-w-full lg:ml-auto"
                        />
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg
                              width="93"
                              height="93"
                              viewBox="0 0 93 93"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                              <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                              <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                              <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                              <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                              <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                              <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                              <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                              <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                              <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                              <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                              <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                              <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                              <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                              <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                              <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                              <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                              <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                              <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                              <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                              <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                              <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                              <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                              <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                              <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                            </svg>
                          </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>