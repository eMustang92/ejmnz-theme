@php
  $links = [
    ['label' => 'Services',  'slug' => 'services'],
    ['label' => 'Portfolio', 'slug' => 'portfolio'],
    ['label' => 'About',     'slug' => 'about'],
    ['label' => 'Contact',   'slug' => 'contact'],
  ];
@endphp

<header
  x-data="{ mobileMenuOpen: false }"
  class="bg-brand-primary sticky top-0 admin-bar:top-8 z-50 shadow-md"
>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      {{-- Logo --}}
      <a href="{{ home_url('/') }}"
         class="text-brand-light font-bold text-xl tracking-tight shrink-0">
        EJMNZ Dev
      </a>

      {{-- Desktop nav --}}
      <nav class="hidden md:flex items-center gap-8">
        @foreach ($links as $link)
          @php $active = is_page($link['slug']); @endphp
          <a href="{{ home_url('/' . $link['slug']) }}"
             class="text-sm font-medium transition-colors duration-150
               {{ $active
                   ? 'text-brand-accent border-b-2 border-brand-accent pb-0.5'
                   : 'text-brand-light/80 hover:text-brand-light' }}"
             @if ($active) aria-current="page" @endif>
            {{ $link['label'] }}
          </a>
        @endforeach
      </nav>

      {{-- CTA desktop + Hamburger --}}
      <div class="flex items-center gap-3">
        <a href="{{ home_url('/contact') }}"
           class="hidden md:inline-flex items-center justify-center
                  px-5 py-2 rounded-full text-sm font-semibold
                  bg-brand-accent text-white hover:bg-brand-accent/90
                  active:scale-95 transition-all duration-150">
          Hablemos
        </a>

        <button type="button"
                class="md:hidden inline-flex items-center justify-center
                       rounded-md p-2 text-brand-light/80
                       hover:text-brand-light hover:bg-white/10 transition-colors"
                @click="mobileMenuOpen = !mobileMenuOpen"
                :aria-expanded="mobileMenuOpen">
          <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  {{-- Mobile drawer --}}
  <div x-show="mobileMenuOpen"
       x-cloak
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0 -translate-y-2"
       x-transition:enter-end="opacity-100 translate-y-0"
       x-transition:leave="transition ease-in duration-150"
       x-transition:leave-start="opacity-100 translate-y-0"
       x-transition:leave-end="opacity-0 -translate-y-2"
       class="md:hidden bg-brand-primary border-t border-white/10">
    <nav class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-1">
      @foreach ($links as $link)
        @php $active = is_page($link['slug']); @endphp
        <a href="{{ home_url('/' . $link['slug']) }}"
           class="block px-3 py-2 rounded-md text-sm font-medium transition-colors
             {{ $active
                 ? 'bg-white/10 text-brand-accent'
                 : 'text-brand-light/80 hover:bg-white/5 hover:text-brand-light' }}"
           @click="mobileMenuOpen = false">
          {{ $link['label'] }}
        </a>
      @endforeach
      <a href="{{ home_url('/contact') }}"
         class="mt-3 flex items-center justify-center px-5 py-2 rounded-full
                text-sm font-semibold bg-brand-accent text-white
                hover:bg-brand-accent/90 transition-colors"
         @click="mobileMenuOpen = false">
        Hablemos
      </a>
    </nav>
  </div>
</header>
