document.getElementById('links').addEventListener('click', function(event) {
    event.preventDefault();
    
    const mainContent = document.getElementById('main-content');
    const hiddenContent = document.getElementById('hidden-content');
    const height = mainContent.offsetHeight;
    const moveUpDistance = 10;
    
    // Move the main content upwards by 25 pixels
    mainContent.style.transform = `translate(-50%, -${moveUpDistance}px)`;

    // Move the hidden content downwards by 25 pixels and ensure it's positioned below the main content
    hiddenContent.style.top = `${height}px`; // Adjust the top position

    // Make the hidden content visible and animate it
    setTimeout(() => {
        hiddenContent.style.display = 'block';
        setTimeout(() => {
            hiddenContent.style.opacity = '1';
            hiddenContent.style.transform = `translate(-50%, 0%)`;
        }, 10); // Small delay to ensure transition works
    }, 500); // Delay for the upward movement animation of the main content
});
