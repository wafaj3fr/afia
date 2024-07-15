module.exports = {
  content: [
    "./*.{html,php}",
    "./src/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#4fa7eb',
        secondary: '#232649',
        accent: '#dfc5fe',
        background: '#fffcf7',
        success: '#73c7a5',
      },
      fontFamily: {
        rubik: ['Rubik', 'sans-serif'],
        segoe: ['Segoe UI', 'sans-serif'],
        sukar: ['Sukar', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
