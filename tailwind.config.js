/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php,xml,}"],
  theme: {
    darkMode: 'class',
    screens: {
      xs: '320px',
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
      xxl: '1536px'
    },
    extend: {
      colors : {
        'rose-of-sharon': {
        '50': '#fffbeb',
        '100': '#fef3c7',
        '200': '#fde58a',
        '300': '#fbd24e',
        '400': '#fabe25',
        '500': '#f49d0c',
        '600': '#d87607',
        '700': '#bc560a',
        '800': '#923f0e',
        '900': '#78340f',
        '950': '#451a03',
    },
      },
    },
  },
  plugins: [],
}
