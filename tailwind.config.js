/** @type {import('tailwindcss').Config} */
module.exports = {

    content: [
        './resources/**/*.blade.php',
    ],
    theme: {
      fontFamily: {
        'pop':['var(--font-poppins)'],
        'monta':['var(--font-montserrat)'],
        'ops':['Open Sans'],
        'inter':['var(--font-inter)'],
      },
      colors: {
        'C1': '#F2E205',
        'C2': '#32173C',
        'C3': '#F2CB05',
        'C4': '#A60C34',

        'white': '#FFFFFF',
        'black': '#000',
        'gold':'#FECC6B',
        'grey':'#DADADA',
        'grad1':'#483CDC',
        'grad2':'#5B4EF1',
        'gray-950': '#030712',
        'gray-900': '#111827',
        'gray-100': '#f3f4f6',
        'gray-800': '#1f2937',
        'gray-300': '#d1d5db',
        'green-200': '#bbf7d0',
        'green-600': '#16a34a',
        'gray-50': '#f9fafb',
        'C1': '#6E04D8',
        'C2': '#1A0272',
        'C3': '#3865F2',

        'C4': '#0697F2',
        'C5': '#06C7F2',
        'D1': '#F7F6FD',
        'D2': '#EDEDED',
        'D3': '#f8fafc',
        'primary': '#3865F2',
        'secondery': '#6E04D8',
        'third': '#141526',
        'green': '#13ce66',
        'green': '#13ce66',
        'gray-dark': '#273444',
        'gray': '#8492a6',
        'gray-light': '#d3dce6',
        'white': '#fff',
        'black': '#000',
        'red': '#D11643',
      },
      extend: {

        backgroundImage: {
          'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
          'gradient-conic':
            'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
        },
        screens: {
          '2xl': '1500px',
          '1xl': {'min': '1280px', 'max': '1499px'},
          'xl': '1000px',
          'max-sm': {'min': '0px', 'max': '575px'},

        },
      },
    },
plugins: [],
}
