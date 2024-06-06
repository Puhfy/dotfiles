document.getElementById('links').addEventListener('click', function(event) {
    event.preventDefault();
    
    const mainContent = document.getElementById('main-content');
    const height = mainContent.offsetHeight;
    const moveUpDistance = height * 0.25;
    
    // Move the main content upwards by 25% of its height
    mainContent.style.transform = `translateY(-${moveUpDistance}px)`;

    // Create a new div with the same class
    const newDiv = document.createElement('div');
    newDiv.className = 'main-content';
    newDiv.innerHTML = `
        <h1 class="title">New Content</h1>
        <p class="description">More content coming soon...</p>
    `;

    // Insert the new div below the original main content with proper spacing
    setTimeout(() => {
        document.querySelector('.main-content-wrapper').appendChild(newDiv);
        newDiv.style.transform = `translateY(${moveUpDistance}px)`; // Adjust value as needed
    }, 500); // Delay for the upward movement animation
});