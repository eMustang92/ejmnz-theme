@php
  $techs = ['WordPress', 'PHP', 'JavaScript', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Node.js', 'Git', 'REST APIs', 'GA4', 'GSC', 'Schema.org'];
  $grid = ['WordPress', 'PHP', 'JavaScript', 'Vue.js', 'Tailwind CSS', 'MySQL'];
@endphp

<section id="stack" class="relative py-24 md:py-32 bg-brand-surface">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <div class="inline-flex items-center gap-2 text-[10px] font-mono uppercase tracking-[0.22em] text-white/50">
        <span class="w-6 h-px bg-gradient-to-r from-brand-cyan to-brand-accent"></span>
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
      @foreach ($grid as $item)
        <div class="ring-gradient glass-card rounded-2xl p-4 flex flex-col items-center gap-2 text-center">
          <span class="w-10 h-10 rounded-lg border border-white/10 flex items-center justify-center">
            <span class="text-brand-cyan text-lg">⚙️</span>
          </span>
          <div class="text-sm font-semibold text-white">{{ $item }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>
