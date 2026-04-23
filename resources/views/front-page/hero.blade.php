<section id="top" class="relative overflow-hidden pt-28 sm:pt-32 md:pt-40 pb-20 md:pb-28">
  <!-- Ambient grid + noise -->
  <div class="absolute inset-0 bg-grid opacity-[0.55]" aria-hidden="true"></div>
  <div class="absolute inset-0 bg-noise opacity-60 mix-blend-overlay" aria-hidden="true"></div>
  <!-- Orb: Cyan left -->
  <div class="absolute -top-40 -left-40 w-[520px] h-[520px] rounded-full orb-glow animate-pulse-slow"
       style="background: radial-gradient(closest-side, rgba(0,180,219,0.55), transparent 70%);"
       aria-hidden="true"></div>
  <!-- Orb: Coral right -->
  <div class="absolute top-24 right-[-10%] w-[620px] h-[620px] rounded-full orb-glow animate-pulse-slow"
       style="background: radial-gradient(closest-side, rgba(240,90,40,0.45), transparent 70%); animation-delay: 1.5s;"
       aria-hidden="true"></div>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Left: Text -->
      <div class="lg:col-span-7">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full glass text-xs font-mono tracking-wide text-white/70 mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-brand animate-pulse"></span>
          Florida Business Solutions · Miami · Remote Worldwide
        </div>

        <h1 class="text-[2.5rem] sm:text-5xl md:text-6xl lg:text-[4.25rem] leading-[1.02] font-extrabold tracking-tight text-white" style="text-wrap: balance;">
          Engineered for <span class="text-gradient">Scalability.</span><br class="hidden sm:block">
          <span class="sm:hidden"> </span>Optimized for Digital <span class="text-gradient">Visibility.</span>
        </h1>

        <p class="mt-6 max-w-2xl text-base sm:text-lg text-white/65 leading-relaxed">
          DevJMNZ LLC builds custom software, SEO-first architectures, and conversion-focused digital strategies for businesses ready to grow — with deep roots in the <span class="text-white">Florida market</span> and a relentless focus on <span class="text-white">real measurable results</span>.
        </p>

        <div class="mt-8 flex flex-wrap items-center gap-3">
          <a href="#contact" class="btn-primary inline-flex items-center justify-center px-5 py-3 rounded-xl text-[0.95rem]">
            Schedule Free Consultation
          </a>
          <a href="#services" class="btn-ghost inline-flex items-center justify-center px-5 py-3 rounded-xl text-[0.95rem] font-semibold">
            Explore Services
          </a>
        </div>

        <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-3 text-xs font-mono text-white/50">
          <span class="inline-flex items-center gap-2">
            <span class="w-4 h-4 text-cyan-brand">✓</span> 10+ Years Experience
          </span>
          <span class="inline-flex items-center gap-2">
            <span class="w-4 h-4 text-cyan-brand">✓</span> Florida · Miami Local SEO
          </span>
          <span class="inline-flex items-center gap-2">
            <span class="w-4 h-4 text-cyan-brand">✓</span> SEO-first Development
          </span>
        </div>
      </div>

      <!-- Right: Floating orb + badges -->
      <div class="lg:col-span-5">
        <div class="relative mx-auto w-full max-w-md aspect-square">
          <!-- Decorative rings -->
          <div class="absolute inset-4 rounded-full border border-white/5"></div>
          <div class="absolute inset-12 rounded-full border border-white/5"></div>
          <div class="absolute inset-20 rounded-full border border-white/5"></div>

          <!-- Floating center orb -->
          <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="animate-float">
              <div class="text-5xl font-extrabold text-gradient select-none">{"<>"}</div>
            </div>
          </div>

          <!-- Floating badges — positioned around orb -->
          <div class="absolute top-4 left-0 animate-float glass rounded-xl px-3 py-2 flex items-center gap-2 text-xs" style="animation-delay: 0s;">
            <span class="w-2 h-2 rounded-full bg-cyan-brand"></span>
            <span class="font-mono text-white/80">Vue.js · PHP</span>
          </div>
          <div class="absolute top-10 right-0 animate-float glass rounded-xl px-3 py-2 flex items-center gap-2 text-xs" style="animation-delay: 0.6s;">
            <span class="w-2 h-2 rounded-full bg-coral-brand"></span>
            <span class="font-mono text-white/80">Technical SEO</span>
          </div>
          <div class="absolute bottom-16 left-0 animate-float glass rounded-xl px-3 py-2 flex items-center gap-2 text-xs" style="animation-delay: 1.2s;">
            <span class="w-2 h-2 rounded-full bg-cyan-brand"></span>
            <span class="font-mono text-white/80">GSC · GA4</span>
          </div>
          <div class="absolute bottom-4 right-4 animate-float glass rounded-xl px-3 py-2 flex items-center gap-2 text-xs" style="animation-delay: 1.8s;">
            <span class="w-2 h-2 rounded-full bg-coral-brand"></span>
            <span class="font-mono text-white/80">CWV 98/100</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats grid -->
    <div class="mt-16 md:mt-24 grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
      <x-stat-card number="+10 yrs" label="Web Engineering" />
      <x-stat-card number="120+" label="Projects Shipped" />
      <x-stat-card number="3.2×" label="Avg. Organic Lift" />
      <x-stat-card number="< 1.2s" label="LCP on Production" />
    </div>
  </div>
</section>
