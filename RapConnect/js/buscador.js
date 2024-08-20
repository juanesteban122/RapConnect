document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const rapperList = document.querySelector('.rapper-list');
    const rappers = rapperList.querySelectorAll('.rapper');

    searchInput.addEventListener('input', function() {
        const query = searchInput.value.toLowerCase();

        rappers.forEach(function(rapper) {
            const name = rapper.querySelector('h2').textContent.toLowerCase();
            if (name.includes(query)) {
                rapper.style.display = '';
            } else {
                rapper.style.display = 'none';
            }
        });
    });
});
