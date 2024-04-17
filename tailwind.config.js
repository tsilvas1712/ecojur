/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./vendor/filament/**/*.blade.php"
  ],
  theme: {

        colors:{
            primary: '#BEB181',
        },

    },

  plugins: [
      require("@tailwindcss/forms"),
      require("@tailwindcss/typography"),
  ],
}

