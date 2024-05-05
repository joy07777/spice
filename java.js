 // Theme toggle functionality
 const themeToggler = document.querySelector(".theme-toggler");
 if (themeToggler) {
     themeToggler.addEventListener("click", function() {
         const currentTheme = document.documentElement.getAttribute('data-bs-theme');
         const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
         document.documentElement.setAttribute('data-bs-theme', newTheme);
         toggleLocalStorage(newTheme);
     });
 }

 function toggleLocalStorage(theme) {
     localStorage.setItem("theme", theme);
 }

 function applyInitialTheme() {
     const storedTheme = localStorage.getItem("theme");
     if (storedTheme) {
         document.documentElement.setAttribute('data-bs-theme', storedTheme);
     }
 }

 applyInitialTheme();