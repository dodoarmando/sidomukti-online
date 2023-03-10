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
              primary: "#991b1b",
              dark: "#0f172a",
        },
    },
  },
  plugins: [],
}
