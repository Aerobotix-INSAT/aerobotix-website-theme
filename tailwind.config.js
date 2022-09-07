/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./*.html",
    "./**/*.html",
    "./scripts/*.js",
  ],
  theme: {
    fontFamily: {
      sans: ["Montserrat", "sans-serif"],
    },
    extend: {
      colors: {
        background: "#222222",
        primary: "#E91921",
        secondary: "#0967AA",
      }

    },
  },
  plugins: [require("@tailwindcss/typography")],
};
