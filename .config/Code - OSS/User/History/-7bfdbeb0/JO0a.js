document.getElementById('links').addEventListener('click', function(event) {
    event.preventDefault();
    
    const mainContent = document.getElementById('main-content');
    const hiddenContent = document.getElementById('hidden-content');
    const height = mainContent.offsetHeight;
    const moveUpDistance = 25;
    
    // Move the main content upwards by 25% of its height
    mainContent.style.transform = `translate(0%, 50%)`;

    // Make the hidden content visible and animate it
    setTimeout(() => {
        hiddenContent.style.display = 'block';
        setTimeout(() => {
            hiddenContent.style.opacity = '1';
            hiddenContent.style.transform = `translateX(-${moveUpDistance}%)`;
        }, 10); // Small delay to ensure transition works
    }, 500); // Delay for the upward movement animation of the main content
});
