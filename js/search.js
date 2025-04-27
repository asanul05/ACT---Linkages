function searchPartners() {
    const searchInput = document.getElementById('search-input').value;

    // Send AJAX request
    const xhr = new XMLHttpRequest();
    // xhr.open('GET', `search-partners.php?search=${encodeURIComponent(searchInput)}`, true);
    xhr.open('GET', `../page-views/search-partners.php?search=${encodeURIComponent(searchInput)}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function loadPage(page) {
    // Send AJAX request for pagination
    const xhr = new XMLHttpRequest();
    // xhr.open('GET', `search-partners.php?page=${page}`, true);
    xhr.open('GET', `../page-views/search-partners.php?page=${page}`, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function filterPartners(category) {
    // Send AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../page-views/search-partners.php?category=${encodeURIComponent(category)}`, true);

    // Show loading message
    xhr.onloadstart = function () {
        document.getElementById('partners-grid').innerHTML = '<p>Loading...</p>';
    };

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('partners-grid').innerHTML = xhr.responseText;

            // Update active button
            const buttons = document.querySelectorAll('.our-partners-category-cont button');
            buttons.forEach(button => button.classList.remove('active'));
            document.querySelector(`[data-category="${category}"]`).classList.add('active');
        }
    };

    xhr.onerror = function () {
        console.error('An error occurred during the AJAX request.');
    };

    xhr.send();
}