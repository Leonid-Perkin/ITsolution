document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var input = document.getElementById('search-input');
    var query = input.value.toLowerCase();
    var results = [];

    var elements = document.body.getElementsByTagName('*');
    for (var i = 0; i < elements.length; i++) {
        var content = elements[i].textContent || elements[i].innerText;
        if (content.toLowerCase().includes(query)) {
            results.push(elements[i]);
        }
    }

    if (results.length > 0) {
        alert('Результаты поиска + results.length');
    } else {
        alert('Ничего не найдено');
    }
});
