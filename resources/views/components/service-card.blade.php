@props(['number' => '01', 'title' => 'Service', 'description' => '', 'features' => [], 'icon' => null])

<article class="ring-gradient glass-card rounded-3xl p-7 flex flex-col h-full">
  <div class="flex items-center justify-between">
    <span class="text-[10px] font-mono uppercase tracking-[0.18em] text-white/45">{{ $number }} / {{ $title }}</span>
    @if ($icon)
      <div class="w-11 h-11 rounded-xl flex items-center justify-center border border-white/10">
        <span class="inline-flex items-center justify-center w-5 h-5 text-brand-cyan">
          {!! $icon !!}
        </span>
      </div>
    @endif
  </div>

  <h3 class="mt-6 text-2xl font-bold tracking-tight text-white">{{ $title }}</h3>
  <p class="mt-2 text-sm text-white/60 leading-relaxed">{{ $description }}</p>

  @if (count($features) > 0)
    <ul class="mt-6 space-y-2.5">
      @foreach ($features as $feature)
        <x-feature-list-item :label="$feature" />
      @endforeach
    </ul>
  @endif

  <div class="mt-7 pt-5 border-t border-white/5 flex items-center justify-between">
    <a href="#contact" class="text-sm font-semibold text-white inline-flex items-center gap-1.5 group">
      Start a project
      <span class="inline-flex items-center justify-center w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
          <path d="M7 7h10v10M7 17 17 7"/>
        </svg>
      </span>
    </a>
    <span class="text-[10px] font-mono text-white/35 uppercase tracking-wider">Fixed · Retainer</span>
  </div>
</article>
