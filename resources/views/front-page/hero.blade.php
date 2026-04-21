<section id="top" class="relative overflow-hidden pt-28 sm:pt-32 md:pt-40 pb-20 md:pb-28">
  <!-- Background orbs -->
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-primary to-brand-dark"></div>
  <div class="absolute -top-40 -left-40 w-[520px] h-[520px] rounded-full blur-3xl opacity-50 animate-pulse-slow"
       style="background: radial-gradient(closest-side, rgba(6, 182, 212, 0.55), transparent 70%);"></div>
  <div class="absolute top-24 right-[-10%] w-[620px] h-[620px] rounded-full blur-3xl opacity-45 animate-pulse-slow"
       style="background: radial-gradient(closest-side, rgba(240, 90, 40, 0.45), transparent 70%); animation-delay: 1.5s;"></div>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Left: Text -->
      <div class="lg:col-span-7">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full glass-card text-xs font-mono tracking-wide text-white/70 mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-brand-cyan animate-pulse"></span>
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
          <a href="#contact" class="inline-flex items-center justify-center px-5 py-3 rounded-xl text-[0.95rem] font-semibold bg-brand-accent text-white hover:bg-brand-accent/90 transition-colors">
            Schedule Free Consultation
          </a>
          <a href="#services" class="inline-flex items-center justify-center px-5 py-3 rounded-xl text-[0.95rem] font-semibold border border-white/20 text-white hover:border-white/40 transition-colors">
            Explore Services
          </a>
        </div>

        <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-3 text-xs font-mono text-white/50">
          <span class="inline-flex items-center gap-2">
            <span class="w-4 h-4 text-brand-cyan">✓</span> 10+ Years Experience
          </span>
          <span class="inline-flex items-center gap-2">
            <span class="w-4 h-4 text-brand-cyan">✓</span> Florida · Miami Local SEO
          </span>
          <span class="inline-flex items-center gap-2">
            <span class="w-4 h-4 text-brand-cyan">✓</span> SEO-first Development
          </span>
        </div>
      </div>

      <!-- Right: Floating orb + badges -->
      <div class="lg:col-span-5">
        <div class="relative mx-auto w-full max-w-md aspect-square">
          <!-- Decorative circles -->
          <div class="absolute inset-4 rounded-full border border-white/5"></div>
          <div class="absolute inset-12 rounded-full border border-white/5"></div>
          <div class="absolute inset-20 rounded-full border border-white/5"></div>

          <!-- Center orb -->
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="animate-float">
              <div class="relative inline-flex items-center justify-center" style="width: 220px; height: 220px;">
                <div class="absolute inset-0 animate-pulse-slow rounded-full"
                     style="background: radial-gradient(closest-side, rgba(6, 182, 212, 0.7), rgba(240, 90, 40, 0.35) 55%, transparent 75%);"></div>
                <div class="text-6xl font-bold text-gradient relative z-10">{"<>"}</div>
              </div>
            </div>
          </div>

          <!-- Floating badges -->
          <div class="absolute top-2 left-2">
            <x-tech-badge label="Vue.js · PHP" delay="0s" variant="float" />
          </div>
          <div class="absolute top-8 right-0">
            <x-tech-badge label="Technical SEO" delay="0.5s" variant="float" />
          </div>
          <div class="absolute bottom-10 left-0">
            <x-tech-badge label="GSC · GA4" delay="1s" variant="float" />
          </div>
          <div class="absolute bottom-2 right-4">
            <x-tech-badge label="CWV 98/100" delay="1.5s" variant="float" />
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
