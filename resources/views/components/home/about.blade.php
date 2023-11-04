<!-- ====== About Section Start -->
<section class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]" id="about">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap items-center justify-between">
        <div class="w-full px-4 lg:w-6/12">
          <div class="-mx-3 flex items-center sm:-mx-4">
            <div class="w-full px-3 sm:px-4 xl:w-1/2">
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/image1.jpg') }}"
                  alt=""
                  class="w-full rounded-2xl"
                />
                <x-about-dots></x-about-dots>
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/image4.png') }}"
                  alt=""
                  class="w-full rounded-2xl"
                />
              </div>
            </div>
            <div class="w-full px-3 sm:px-4 xl:w-1/2">
              <div class="relative z-10 my-4">
                <img
                  src="{{ url('/img/image3.jpg') }}"
                  alt=""
                  class="w-full rounded-2xl"
                />
                
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
            <div class="mt-10 lg:mt-0">
                <span class="text-primary mb-2 block text-lg font-semibold">
                    <blockquote  class="text-sm text-gray-500 italic py-2 border-l-4 border-amber-500">
                        Tout est réalisable avec un travail acharné
                    </blockquote>  
                </span>
                <h2 class="text-dark mb-8 text-3xl font-bold sm:text-4xl">
                    A propos de Moi
                </h2>
                <p class="text-body-color mb-8 text-base">
                    <div class="text-body-color mb-8 text-base">Nom: <i>Kaba</i></div>
                    <div class="text-body-color mb-8 text-base">Prénom: <i>Abdoulaye</i></div>
                    
                    <div class="text-body-color mb-8 text-base">Email: <i>abdallahkaba98@gmail.com</i></div>
                    <div class="text-body-color mb-8 text-base">Site Web: <a href="http\\themakcx.com"><i>themakcx.com</i></a></div>
                    

                </p>
                
                <x-button-link href="{{ url('/img/cv.pdf') }}" variant="primary" class="mr-3" target="_blank">
                  Mon CV
              </x-button-link>
                {{-- <p class="text-body-color mb-8 text-base">
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout. The point
                    of using Lorem Ipsum is that it has a more-or-less.
                </p> --}}
                {{-- <x-button-link href="http://youtube.com/thecodeholic" variant="red" target="_blank">
                    Voir ma chaine
                </x-button-link> --}}
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
  