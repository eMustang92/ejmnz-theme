<section id="contact" class="relative py-24 md:py-32 bg-brand-dark">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">
    <div class="ring-gradient glass-card rounded-3xl overflow-hidden">
      <div class="grid grid-cols-1 lg:grid-cols-12">
        <!-- Left: Contact info -->
        <div class="lg:col-span-5 p-8 md:p-10 border-b lg:border-b-0 lg:border-r border-white/5">
          <div class="inline-flex items-center gap-2 text-[10px] font-mono uppercase tracking-[0.22em] text-white/50">
            <span class="w-6 h-px bg-gradient-to-r from-brand-cyan to-brand-accent"></span>
            Lead Generation
          </div>
          <h2 class="mt-3 text-3xl md:text-4xl font-extrabold tracking-tight text-white" style="text-wrap: balance;">
            Let's build something <span class="text-gradient">that ranks</span>.
          </h2>
          <p class="mt-4 text-sm md:text-base text-white/60 leading-relaxed">
            Tell us about your project. You'll hear back within one business day from a senior engineer — not a sales rep.
          </p>

          <div class="mt-8 space-y-4">
            <div class="flex items-center gap-3">
              <span class="w-10 h-10 rounded-lg border border-white/10 flex items-center justify-center text-brand-cyan">✉️</span>
              <div>
                <div class="text-[10px] font-mono uppercase tracking-[0.18em] text-white/45">Email</div>
                <div class="text-sm text-white">hello@devjmnz.com</div>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-10 h-10 rounded-lg border border-white/10 flex items-center justify-center text-brand-cyan">📍</span>
              <div>
                <div class="text-[10px] font-mono uppercase tracking-[0.18em] text-white/45">HQ</div>
                <div class="text-sm text-white">Florida, USA · Remote worldwide</div>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-10 h-10 rounded-lg border border-white/10 flex items-center justify-center text-brand-cyan">⏱️</span>
              <div>
                <div class="text-[10px] font-mono uppercase tracking-[0.18em] text-white/45">Response</div>
                <div class="text-sm text-white">&lt; 24h on business days</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Form -->
        <div class="lg:col-span-7 p-8 md:p-10">
          <form @submit.prevent="submitForm" x-data="contactForm()" class="space-y-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <input type="text" x-model="form.name" placeholder="Jane Smith"
                     class="rounded-xl px-4 py-3 text-sm bg-white/5 border border-white/10 text-white placeholder:text-white/40 focus:outline-none focus:ring-2 focus:ring-brand-cyan" />
              <input type="email" x-model="form.email" placeholder="jane@company.com"
                     class="rounded-xl px-4 py-3 text-sm bg-white/5 border border-white/10 text-white placeholder:text-white/40 focus:outline-none focus:ring-2 focus:ring-brand-cyan" />
            </div>
            <input type="text" x-model="form.company" placeholder="Acme Corp · Miami, FL"
                   class="w-full rounded-xl px-4 py-3 text-sm bg-white/5 border border-white/10 text-white placeholder:text-white/40 focus:outline-none focus:ring-2 focus:ring-brand-cyan" />
            <select x-model="form.service"
                    class="w-full rounded-xl px-4 py-3 text-sm bg-brand-surface border border-white/10 text-white focus:outline-none focus:ring-2 focus:ring-brand-cyan">
              <option>Web Development</option>
              <option>SEO Strategy</option>
              <option>Digital Marketing</option>
              <option>Full-Stack Engagement</option>
            </select>
            <textarea x-model="form.message" rows="5" placeholder="Project details..."
                      class="w-full rounded-xl px-4 py-3 text-sm bg-white/5 border border-white/10 text-white placeholder:text-white/40 focus:outline-none focus:ring-2 focus:ring-brand-cyan resize-none"></textarea>
            <button type="submit" :disabled="loading"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-3 rounded-xl text-sm font-semibold bg-brand-accent text-white hover:bg-brand-accent/90 disabled:opacity-60 transition-colors">
              <span x-show="!loading">Send Message</span>
              <span x-show="loading" x-cloak>Sending...</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
