// https://tailwindcss.com/docs/configuration
const plugin = require('tailwindcss/plugin');
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
    },
    screens: {
      sm: '640px',
      // => @media (min-width: 640px) { ... }

      md: '768px',
      // => @media (min-width: 768px) { ... }

      lg: '960px',
      // => @media (min-width: 1024px) { ... }

      xl: '1140px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1280px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: '#92e3a9',
          lighter: '#def7e5',
          darkness: '#263238',
        },
        text: '#1c282f',
        grey: '#efefef',
      }, // Extend Tailwind's default colors
      fontFamily: {
        roboto: 'roboto, sans-serif',
      },
    },
  },
  plugins: [
    plugin(function ({ addUtilities }) {
      addUtilities({
        '.title--display1': {
          fontWeight: 700,
          fontSize: '6rem', //96px
          lineHeight: '8.375rem', //134px
          letterSpacing: '0.03em',
          // textTransform: "uppercase",
        },
        '.title--display2': {
          fontWeight: 700,
          fontSize: '4.5rem', //72px
          lineHeight: '6.5rem', //104px
          letterSpacing: '0.03em',
          // textTransform: "uppercase",
        },
        '.title--1': {
          fontWeight: 700,
          fontSize: '4rem', //64px
          lineHeight: '5.75rem', //92px
          letterSpacing: '0.03em',
          // textTransform: "uppercase",
        },
        '.title--2': {
          fontWeight: 700,
          fontSize: '3rem', //48px
          lineHeight: '4.313rem', //69px
          letterSpacing: '0.03em',
          // textTransform: "uppercase",
        },
        '.title--3': {
          fontWeight: 700,
          fontSize: '2.25rem', //36px
          lineHeight: '3.25rem', //52px
          letterSpacing: '0.03em',
          // textTransform: "uppercase",
        },
        '.title--4': {
          fontWeight: 700,
          fontSize: '1.5rem', //24px
          lineHeight: '2.188rem', //35px
          letterSpacing: '0.05em',
          // textTransform: "uppercase",
        },
        '.title--5': {
          fontWeight: 700,
          fontSize: '1.125rem', //18px
          lineHeight: '1.625rem', //26px
          letterSpacing: '0.05em',
          // textTransform: "uppercase",
        },
        '.title--6': {
          fontWeight: 700,
          fontSize: '1rem', //16px
          lineHeight: '1.438rem', //23px
          letterSpacing: '0.01em',
          // textTransform: "uppercase",
        },
        '.title--lead': {
          fontWeight: 400,
          fontSize: '1.125rem', //18px
          lineHeight: '1.938rem', //31px
        },
        '.title--body': {
          fontWeight: 400,
          fontSize: '1rem',
          lineHeight: '1.688rem', //27px
        },
        '.title--button': {
          fontWeight: 600,
          fontFamily: 'Montserrat',
          fontSize: '0.875rem', //12px
          lineHeight: '1rem',

          // textTransform: "uppercase",
        },
        '.title--overline': {
          fontWeight: 700,
          fontSize: '1.125rem', //18px
          lineHeight: '1.875rem', //30px
          letterSpacing: '0.01em',
          textTransform: 'uppercase',
        },
        '.title--caption': {
          fontWeight: 700,
          fontSize: '0.75rem', //12px
          lineHeight: '1.25rem', //20px
          letterSpacing: '0.4px',
        },
        // Extend in sass project WordPress
        '.backgroundSettings': {
          backgroundPosition: 'center center',
          backgroundSize: 'cover',
          backgroundRepeat: 'no-repeat',
        },
      });
    }),
  ],

  function({ addComponents }) {
    addComponents({
      '.container': {
        maxWidth: '100%',
        opacity: '0.5',
        '@screen sm': {
          maxWidth: '540px',
        },
        '@screen md': {
          maxWidth: '720px',
        },
        '@screen lg': {
          maxWidth: '960px',
        },
        '@screen xl': {
          maxWidth: '1140px',
        },
      },
    });
  },
};
