document.querySelectorAll('.nav-link').forEach(function(navLink) {
    navLink.addEventListener('click', function() {
        // Remove background color from all buttons
        document.querySelectorAll('.nav-link').forEach(function(btn) {
            btn.style.background = '';
        });
        // Set background color for the clicked button
        this.style.background = '#060000';
    });
});