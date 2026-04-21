@props(['icon' => null, 'label' => 'Tech', 'variant' => 'pill', 'delay' => null])

<div @class([
  'inline-flex items-center gap-2.5 px-4 py-2.5 rounded-xl text-sm font-medium shrink-0',
  'glass-card' => $variant === 'pill',
  'absolute' => $variant === 'float',
  'animate-float' => $variant === 'float',
])
@if ($delay) style="animation-delay: {{ $delay }}" @endif
>
  @if ($icon)
    <span class="inline-flex items-center justify-center w-4 h-4 text-brand-cyan" aria-hidden="true">
      {!! $icon !!}
    </span>
  @endif
  <span class="font-mono tracking-tight text-white/85">{{ $label }}</span>
</div>