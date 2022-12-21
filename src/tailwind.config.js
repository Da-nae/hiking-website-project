/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["app/views/**/*.{html,js,view.php}"],
  theme: {
    extend: {
      colors: {
        "Old-mauve": "#6D2E46",
        "Tomato": "#FA6C51",
        "Rich-black": "#042A2B",
        "Laurel-green": "#BBC7A4",
        "Ming": "#3C787E"
      }
    },
  },
  plugins: [],
}
