/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./**/**/*.php",
    "./*.html",
    "./**/*.html",
    "./scripts/*.js",
  ],
  theme: {
    container: {
      center: true,
    },
    fontFamily: {
      sans: ["Montserrat", "sans-serif"],
    },
    extend: {
      colors: {
        background: "hsl(var(--background) / <alpha-value>)",
        primary: "#E91921",
        secondary: "#0967AA",
        glass: "#FDFAFA80",
      },
      backgroundImage: {
        pattern: "url('assets/images/red-gradient.jpg')",
        fade: "linear-gradient(0deg, rgba(34,34,34,1) 0%, rgba(34,34,34,0) 100%)",
      },
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("@tailwindcss/line-clamp"),
  ],
};
