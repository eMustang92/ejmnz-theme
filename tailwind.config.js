/** @type {import('tailwindcss').Config} */
export default {
  content: ['./app/**/*.php', './resources/**/*.{php,js,jsx,ts,tsx,blade.php}'],
  theme: {
    extend: {
      colors: {
        brand: {
          primary:       '#0F172A',
          accent:        '#00B4DB',
          light:         '#F8FAFC',
          dark:          '#0B0E14',
          surface:       '#111827',
          glass:         'rgba(255,255,255,0.06)',
          'glass-border':'rgba(255,255,255,0.12)',
        },
        'cyan-brand':   '#00B4DB',
        'cyan-soft':    '#6FE0F5',
        'cyan-deep':    '#0088A8',
        'coral-brand':  '#F05A28',
        'coral-soft':   '#FF8A5C',
        'coral-deep':   '#B83E13',
        'violet-brand': '#8B5CF6',
        'ink': {
          950: '#06080C',
          900: '#0B0E14',
          800: '#10141C',
          700: '#161B26',
          600: '#1E2430',
        },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
      keyframes: {
        marquee: {
          '0%':   { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%':      { transform: 'translateY(-12px)' },
        },
        'pulse-slow': {
          '0%, 100%': { opacity: '0.55' },
          '50%':      { opacity: '0.95' },
        },
      },
      animation: {
        'marquee':      'marquee 40s linear infinite',
        'marquee-rev':  'marquee 50s linear infinite reverse',
        'float':        'float 8s ease-in-out infinite',
        'pulse-slow':   'pulse-slow 4s ease-in-out infinite',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    function({ addVariant }) {
      addVariant('admin-bar', '.admin-bar &');
    },
  ],
};
