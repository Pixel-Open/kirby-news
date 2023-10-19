/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [],
  safelist: [
    {
      pattern: /grid-cols-(1|2|3|4)/,
      variants: ['xl', 'lg'],
    },
  ],
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}

