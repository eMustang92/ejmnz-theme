@php
  $links = [
    ['label' => 'Services',  'slug' => 'services'],
    ['label' => 'Portfolio', 'slug' => 'portfolio'],
    ['label' => 'About',     'slug' => 'about'],
    ['label' => 'Contact',   'slug' => 'contact'],
  ];
@endphp

<div x-data="{ mobileMenuOpen: false }" class="w-full">
  <div class="flex items-center justify-between h-12">

    {{-- Logo --}}
    <a href="{{ home_url('/') }}" class="shrink-0 flex items-center gap-2" aria-label="DevJMNZ LLC — Home">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="32" height="32" class="shrink-0" aria-hidden="true">
        <defs>
          <linearGradient id="nav-cyan" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#00B4DB;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#0083B0;stop-opacity:1" />
          </linearGradient>
          <linearGradient id="nav-bg" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#0D1117;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#161B22;stop-opacity:1" />
          </linearGradient>
          <linearGradient id="nav-glass" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#00B4DB;stop-opacity:0.18" />
            <stop offset="100%" style="stop-color:#0083B0;stop-opacity:0.06" />
          </linearGradient>
          <filter id="nav-glow">
            <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
            <feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge>
          </filter>
        </defs>
        <polygon points="50,5 92,27.5 92,72.5 50,95 8,72.5 8,27.5" fill="url(#nav-bg)"/>
        <polygon points="50,5 92,27.5 92,72.5 50,95 8,72.5 8,27.5" fill="url(#nav-glass)" stroke="url(#nav-cyan)" stroke-width="1.5"/>
        <text x="50" y="66" font-family="'Courier New', monospace" font-size="38" font-weight="700" fill="url(#nav-cyan)" filter="url(#nav-glow)" text-anchor="middle" letter-spacing="-2">&lt;/&gt;</text>
        <text x="50" y="84" font-family="'Courier New', monospace" font-size="8" fill="#00B4DB" opacity="0.6" text-anchor="middle" letter-spacing="4">JMNZ</text>
      </svg>
      <div class="flex flex-col justify-center leading-none">
        <span class="text-[13px] font-bold font-mono text-white">Dev<span class="text-cyan-brand">JMNZ</span> <span class="text-white/40 font-medium text-[11px]">LLC</span></span>
        <span class="text-[8px] font-mono uppercase tracking-[0.2em] text-white/40 mt-0.5">Software · SEO · Growth</span>
      </div>
    </a>

    {{-- Desktop nav --}}
    <nav class="hidden md:flex items-center gap-8">
      @foreach ($links as $link)
        @php $active = is_page($link['slug']); @endphp
        <a href="{{ home_url('/' . $link['slug']) }}"
           class="text-sm font-medium transition-colors duration-150
             {{ $active
                 ? 'text-cyan-brand border-b border-cyan-brand pb-0.5'
                 : 'text-white/70 hover:text-white' }}"
           @if ($active) aria-current="page" @endif>
          {{ $link['label'] }}
        </a>
      @endforeach
    </nav>

    {{-- CTA desktop + Hamburger --}}
    <div class="flex items-center gap-3">
      <a href="{{ home_url('/contact') }}"
         class="hidden md:inline-flex items-center justify-center
                px-4 py-2 rounded-xl text-sm font-semibold
                btn-primary active:scale-95 transition-all duration-150">
        Hablemos
      </a>

      <button type="button"
              class="md:hidden inline-flex items-center justify-center
                     rounded-lg p-2 text-white/70 hover:text-white
                     hover:bg-white/10 transition-colors"
              @click="mobileMenuOpen = !mobileMenuOpen"
              :aria-expanded="mobileMenuOpen">
        <svg x-show="!mobileMenuOpen" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg x-show="mobileMenuOpen" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
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
       class="md:hidden mt-2 rounded-xl glass-strong border-t border-white/10">
    <nav class="px-4 py-4 flex flex-col gap-1">
      @foreach ($links as $link)
        @php $active = is_page($link['slug']); @endphp
        <a href="{{ home_url('/' . $link['slug']) }}"
           class="block px-3 py-2 rounded-lg text-sm font-medium transition-colors
             {{ $active
                 ? 'bg-white/10 text-cyan-brand'
                 : 'text-white/70 hover:bg-white/5 hover:text-white' }}"
           @click="mobileMenuOpen = false">
          {{ $link['label'] }}
        </a>
      @endforeach
      <a href="{{ home_url('/contact') }}"
         class="mt-2 flex items-center justify-center px-4 py-2 rounded-xl
                text-sm font-semibold btn-primary transition-colors"
         @click="mobileMenuOpen = false">
        Hablemos
      </a>
    </nav>
  </div>
</div>
