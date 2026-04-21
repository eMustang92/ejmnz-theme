@props(['number' => '10+', 'label' => 'Stat', 'subtext' => ''])

<div class="ring-gradient glass-card rounded-2xl p-5">
  <div class="text-2xl md:text-3xl font-extrabold text-gradient tracking-tight">{{ $number }}</div>
  <div class="mt-1 text-[11px] md:text-xs uppercase tracking-[0.14em] text-white/55 font-mono">
    {{ $label }}
  </div>
  @if ($subtext)
    <div class="mt-1 text-[10px] text-white/40">{{ $subtext }}</div>
  @endif
</div>
