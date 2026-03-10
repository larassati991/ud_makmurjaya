/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#DC2626', // merah utama
          dark: '#991B1B',
          light: '#EF4444',
        },
        secondary: {
          DEFAULT: '#7F1D1D', // maroon gelap
          dark: '#450A0A',
          light: '#991B1B',
        },
        accent: {
          DEFAULT: '#B91C1C', // merah accent
          dark: '#7F1D1D',
          light: '#DC2626',
        }
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}