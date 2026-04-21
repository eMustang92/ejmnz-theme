<section id="services" class="relative py-24 md:py-32 bg-brand-dark">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 text-[10px] font-mono uppercase tracking-[0.22em] text-white/50">
        <span class="w-6 h-px bg-gradient-to-r from-brand-cyan to-brand-accent"></span>
        Core Services
      </div>
      <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white" style="text-wrap: balance;">
        Three disciplines. <span class="text-gradient">One system.</span>
      </h2>
      <p class="mt-4 text-base md:text-lg text-white/60 leading-relaxed">
        We don't hand off between engineering, SEO, and marketing — we build them as a single integrated system from the first line of code.
      </p>
    </div>

    <div class="mt-14 grid grid-cols-1 md:grid-cols-3 gap-5">
      <x-service-card
        number="01"
        title="Web Development"
        description="Production-grade websites and web apps, architected for performance, SEO, and scale from day one."
        :features="[
          'WordPress Advanced (ACF, Custom Blocks)',
          'Vue.js & modern JS front-ends',
          'Scalable architecture & CI/CD',
          'Core Web Vitals ≥ 95'
        ]"
      />

      <x-service-card
        number="02"
        title="SEO Strategy"
        description="Technical, local, and content SEO — engineered into your stack, not bolted on afterward."
        :features="[
          'Technical SEO audits & fixes',
          'Local SEO for Florida & Miami',
          'Google Search Console optimization',
          'Schema, sitemaps & indexability'
        ]"
      />

      <x-service-card
        number="03"
        title="Digital Marketing"
        description="Conversion-focused content and analytics, tied directly to revenue — not vanity metrics."
        :features="[
          'Conversion-focused content',
          'GA4 & attribution tracking',
          'Landing pages & A/B testing',
          'Email & nurture automation'
        ]"
      />
    </div>
  </div>
</section>
