<header
  x-data="{ scrolled: false }"
  x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 12 }, { passive: true })"
  :class="scrolled ? 'py-2' : 'py-4'"
  class="fixed top-0 left-0 right-0 z-40 transition-all duration-300"
>
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div
      :class="scrolled ? 'glass-strong shadow-[0_8px_30px_-12px_rgba(0,0,0,0.6)]' : 'bg-transparent'"
      class="flex items-center justify-between rounded-2xl px-4 sm:px-5 py-2.5 transition-all duration-300"
    >
      @include('components.navbar')
    </div>
  </div>
</header>
