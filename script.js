<script>
    // JavaScript to switch between product images
    let currentImageIndex = 0; // Initialize the current image index

    function switchProductImage() {
        const productImages = document.querySelectorAll('.product-slide');
        productImages[currentImageIndex].style.display = 'none'; // Hide the current image
        currentImageIndex = (currentImageIndex + 1) % productImages.length; // Move to the next image
        productImages[currentImageIndex].style.display = 'block'; // Display the new image
    }

    // Set an interval to switch images every 3 seconds (3000 milliseconds)
    setInterval(switchProductImage, 2000);
</script>
