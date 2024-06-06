document.getElementById('links').addEventListener('click', function(event) {
    event.preventDefault();
    
    const mainContent = document.getElementById('main-content');
    const hiddenContent = document.getElementById('hidden-content');
    const height = mainContent.offsetHeight;
    const moveUpDistance = 50;
    mainContent.style.transform = `translate(-50%, -100%)`;
    hiddenContent.style.top = `${height}px`;

    setTimeout(() => {
        hiddenContent.style.display = 'block';
        setTimeout(() => {
            hiddenContent.style.opacity = '1';
            hiddenContent.style.transform = `translate(-50%, 125%)`;
        }, 10); 
    }, 500); 
});
