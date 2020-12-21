  // tailwind.config.js
  module.exports = {
    purge: [],
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
     darkMode: false, // or 'media' or 'class'
     theme: {
      screens: {
        'sm': {'min': '640px', 'max': '767px'},
        'md': {'min': '768px', 'max': '1023px'},
        'lg': {'min': '1024px', 'max': '1279px'},
        'xl': {'min': '1280px', 'max': '1535px'},
        '2xl': {'min': '1536px'},
      },
       
       extend: {},
     },
     variants: {
       extend: {},
     },
     plugins: [],
   }
   