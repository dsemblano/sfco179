// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        whitenos: '#e5e7eb',
        greymenu: '#3e4435',
        greymenuhover: '#57604a',
        greynos: '#323237'
      }, // Extend Tailwind's default colors
      typography: {
        DEFAULT: { // this is for prose class
          css: {
            h1: {
              fontWeight: '400', // change h1 font-weight
            },
          },
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography')
  ],
};
