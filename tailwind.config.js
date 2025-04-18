/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#000000',
        secondary: '#333333',
        accent: '#f5f5f5',
        dark: '#000000',
        light: '#ffffff'
      }
    },
  },
  plugins: [],
};

