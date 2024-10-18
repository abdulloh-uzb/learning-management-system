window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }

    const searchInput = document.querySelector('.datatable-input'); // Select the search input element
    if (searchInput) {
        searchInput.placeholder = "Қидириш..."; // Set your custom placeholder here
    }

});

