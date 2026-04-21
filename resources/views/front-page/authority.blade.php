@php
  $steps = [
    ['num' => '01', 'title' => 'SEO-first development', 'desc' => 'Every technical decision — framework, markup, schema, hosting — is evaluated through an SEO and performance lens before a single line ships.'],
    ['num' => '02', 'title' => 'Measurable by default', 'desc' => 'Analytics, attribution, and Search Console wiring are baked in — so you see exactly which changes moved revenue, not just rankings.'],
    ['num' => '03', 'title' => 'Partner, not vendor', 'desc' => 'Long-term relationships with Florida-based businesses. Direct communication, senior-only work, no account-manager layers.'],
  ];
@endphp

<section id="authority" class="relative py-24 md:py-32 bg-brand-primary">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      <!-- Left: Authority stats -->
      <div class="lg:col-span-5">
        <div class="max-w-3xl">
          <div class="inline-flex items-center gap-2 text-[10px] font-mono uppercase tracking-[0.22em] text-white/50">
            <span class="w-6 h-px bg-gradient-to-r from-brand-cyan to-brand-accent"></span>
            Experience & Authority
          </div>
          <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white" style="text-wrap: balance;">
            A decade of shipping. <span class="text-gradient">Zero shortcuts.</span>
          </h2>
          <p class="mt-4 text-base md:text-lg text-white/60 leading-relaxed">
            DevJMNZ has delivered production work across e-commerce, professional services, and SaaS — built around the conviction that a website is an engineering asset, not a marketing brochure.
          </p>
        </div>

        <div class="mt-8 ring-gradient glass-card rounded-3xl p-7">
          <div class="flex items-end gap-5">
            <div class="text-[5.5rem] leading-none font-extrabold text-gradient tracking-tighter">10<span class="text-white/50 text-4xl align-top font-bold">+</span></div>
            <div class="pb-3">
              <div class="text-sm font-mono uppercase tracking-[0.2em] text-white/55">Years</div>
              <div class="text-white font-semibold">Web Engineering & SEO</div>
            </div>
          </div>
          <div class="mt-6 grid grid-cols-3 gap-3 text-center">
            <div class="glass-card rounded-xl py-3">
              <div class="text-xl font-bold text-white">120+</div>
              <div class="text-[10px] font-mono uppercase tracking-wider text-white/50 mt-0.5">Projects</div>
            </div>
            <div class="glass-card rounded-xl py-3">
              <div class="text-xl font-bold text-white">FL</div>
              <div class="text-[10px] font-mono uppercase tracking-wider text-white/50 mt-0.5">HQ · Remote</div>
            </div>
            <div class="glass-card rounded-xl py-3">
              <div class="text-xl font-bold text-white">98</div>
              <div class="text-[10px] font-mono uppercase tracking-wider text-white/50 mt-0.5">Avg. PSI</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Process steps -->
      <div class="lg:col-span-7">
        <ul class="space-y-4">
          @foreach ($steps as $step)
            <li class="ring-gradient glass-card rounded-2xl p-6 flex gap-5">
              <div class="shrink-0">
                <div class="w-12 h-12 rounded-xl border border-white/10 flex items-center justify-center text-lg font-bold text-gradient">{{ $step['num'] }}</div>
              </div>
              <div>
                <h4 class="text-lg font-semibold text-white">{{ $step['title'] }}</h4>
                <p class="mt-1.5 text-sm text-white/65 leading-relaxed">{{ $step['desc'] }}</p>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
