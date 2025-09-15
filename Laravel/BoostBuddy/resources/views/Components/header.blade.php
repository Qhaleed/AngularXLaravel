<div class="relative flex flex-col  bg-black
 text-white align-middle justify-center text-center gap-10 max-w-screen p-10 pt-60">


    <video class="absolute top-0 left-0 w-full h-full object-cover z-0"
    autoplay
    muted
    loop

    playsinline>
    <source src="{{ asset('build/assets/videos/landing-video.mp4') }}" type="video/mp4">

    </video>

    <div class="flex flex-col relative z-10 gap-10">

      <h1 class="text-5xl">
        {{ $title }}
    </h1>

    <h3 class="justify-center text-center">
        {{ $subtitle }}
    </h3>
    </div>



</div>
