@php
  $techs = ['WordPress', 'PHP', 'JavaScript', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Node.js', 'Git', 'REST APIs', 'GA4', 'GSC', 'Schema.org'];
  $techGrid = [
    ['name' => 'WordPress', 'svg' => '<svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-cyan-brand"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 1.542c2.401 0 4.593.899 6.251 2.374L4.916 18.251A8.432 8.432 0 0 1 3.542 12c0-4.666 3.792-8.458 8.458-8.458zm0 16.916a8.41 8.41 0 0 1-5.034-1.665l8.334-8.334a8.41 8.41 0 0 1 1.65 5.099c0 4.666-3.792 8.458-8.458 8.458z"/></svg>'],
    ['name' => 'PHP', 'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="w-5 h-5 text-cyan-brand"><path d="M12 4C7.582 4 4 7.582 4 12s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8z"/><path d="M7 12h2l1-4h2l-1 4h2"/><path d="M13 12h2c.552 0 1-.448 1-1v-1c0-.552-.448-1-1-1h-2v5"/></svg>'],
    ['name' => 'JavaScript', 'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="w-5 h-5 text-cyan-brand"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 17c0 1 .5 2 2 2s2-1 2-2v-6"/><path d="M15 11c0-1-.5-2-2-2s-2 1-2 2 2 2 2 2 2 1 2 2-1 2-2 2"/></svg>'],
    ['name' => 'Vue.js', 'svg' => '<svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-cyan-brand"><path d="M2 3h3.5L12 15l6.5-12H22L12 21 2 3zm4.5 0h3L12 9l2.5-6h3L12 16.5 6.5 3z"/></svg>'],
    ['name' => 'Tailwind', 'svg' => '<svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-cyan-brand"><path d="M12 6C9.6 6 8.1 7.2 7.5 9.6c.9-1.2 1.95-1.65 3.15-1.35.685.171 1.174.668 1.716 1.219C13.313 10.48 14.388 11.6 16.5 11.6c2.4 0 3.9-1.2 4.5-3.6-.9 1.2-1.95 1.65-3.15 1.35-.685-.171-1.174-.668-1.716-1.219C15.187 7.12 14.112 6 12 6zm-4.5 6C5.1 12 3.6 13.2 3 15.6c.9-1.2 1.95-1.65 3.15-1.35.685.171 1.174.668 1.716 1.219C8.813 16.48 9.888 17.6 12 17.6c2.4 0 3.9-1.2 4.5-3.6-.9 1.2-1.95 1.65-3.15 1.35-.685-.171-1.174-.668-1.716-1.219C11.687 13.12 10.612 12 7.5 12z"/></svg>'],
    ['name' => 'MySQL', 'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="w-5 h-5 text-cyan-brand"><ellipse cx="12" cy="6" rx="8" ry="3"/><path d="M4 6v6c0 1.657 3.582 3 8 3s8-1.343 8-3V6"/><path d="M4 12v6c0 1.657 3.582 3 8 3s8-1.343 8-3v-6"/></svg>'],
  ];
@endphp

<section id="stack" class="relative py-24 md:py-32 bg-brand-surface">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <div class="inline-flex items-center gap-2 text-[10px] font-mono uppercase tracking-[0.22em] text-white/50">
        <span class="w-6 h-px bg-gradient-to-r from-cyan-brand to-coral-brand"></span>
        Tech Stack
      </div>
      <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white" style="text-wrap: balance;">
        Built with tools that <span class="text-gradient">scale quietly.</span>
      </h2>
      <p class="mt-4 text-base md:text-lg text-white/60 leading-relaxed">
        A deliberate, battle-tested stack — chosen for speed, maintainability, and direct alignment with your SEO and growth goals.
      </p>
    </div>

    <!-- Marquee scrolling -->
    <div class="relative overflow-hidden">
      <div class="flex gap-3 animate-marquee w-max">
        @foreach ($techs as $tech)
          <x-tech-badge :label="$tech" variant="pill" />
        @endforeach
        @foreach ($techs as $tech)
          <x-tech-badge :label="$tech" variant="pill" />
        @endforeach
      </div>
    </div>

    <!-- Grid showcase -->
    <div class="mt-14 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
      @foreach ($techGrid as $tech)
        <div class="ring-gradient glass rounded-2xl p-4 flex flex-col items-center gap-2 text-center">
          <span class="w-10 h-10 rounded-lg svc-icon-wrap border border-white/10 flex items-center justify-center">
            {!! $tech['svg'] !!}
          </span>
          <div class="text-sm font-semibold text-white">{{ $tech['name'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>
