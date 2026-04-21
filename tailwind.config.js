/** @type {import('tailwindcss').Config} */
export default {
  content: ['./app/**/*.php', './resources/**/*.{php,js,jsx,ts,tsx,blade.php}'],
  theme: {
    extend: {
      // Tus design tokens van aquí
      colors: {
        brand: {
          primary: '#0F172A', // ajusta a tu palette EJMNZ
          accent: '#6366F1',
          light: '#F8FAFC',
        },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
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
