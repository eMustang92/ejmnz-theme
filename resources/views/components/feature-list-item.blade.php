@props(['label' => 'Feature'])

<li class="flex items-center gap-3 text-sm text-white/75">
  <span class="w-7 h-7 rounded-md bg-white/[0.03] border border-white/[0.06] flex items-center justify-center shrink-0">
    <span class="inline-flex items-center justify-center w-3.5 h-3.5 text-white/70">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"/>
        <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"/>
        <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"/>
      </svg>
    </span>
  </span>
  {{ $label }}
</li>
