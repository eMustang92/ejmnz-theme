/** @type {import('tailwindcss').Config} */
export default {
  content: ['./app/**/*.php', './resources/**/*.{php,js,jsx,ts,tsx,blade.php}'],
  theme: {
    extend: {
      colors: {
        brand: {
          primary: '#0F172A',
          accent: '#6366F1',
          light: '#F8FAFC',
          dark: '#080D1A',
          surface: '#111827',
          glass: 'rgba(255,255,255,0.06)',
          'glass-border': 'rgba(255,255,255,0.12)',
          cyan: '#06B6D4',
          emerald: '#10B981',
          violet: '#7C3AED',
          indigo: '#4F46E5',
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
          '0%, 100%': { opacity: '0.6' },
          '50%':      { opacity: '1' },
        },
      },
      animation: {
        'marquee':      'marquee 28s linear infinite',
        'marquee-slow': 'marquee 40s linear infinite',
        'float':        'float 6s ease-in-out infinite',
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
