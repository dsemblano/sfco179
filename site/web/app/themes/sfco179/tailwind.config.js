import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        sfco179: '#FF5100',
        whitenos: '#e5e7eb',
        greymenu: '#3e4435',
        greymenuhover: '#57604a',
        greynos: '#323237'
      }, // Extend Tailwind's default colors
      height: {
        'mobile': '80vh',
      },
      fontFamily: {
        sans: 'soleilregular, sans-serif',
        },
      typography: {
        DEFAULT: { // this is for prose class
          css: {
            ...['h1', 'h2', 'h3', 'h4', 'h5', 'h6'].reduce((obj, heading) => {
              obj[heading] = { fontWeight: '400' };
              return obj;
            }, {}),
            // maxWidth: '100ch',
          },
        },
      },
    },
  },
  plugins: [
    typography,
  ],
};

export default config;
