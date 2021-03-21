
let btn = document.getElementById('searchFilter');

btn.addEventListener('click', function(e) {
    let text = searchFilter.innerText;

    axios.post('/filter', {
        name: text
    }).then((response) => {
        // console.log(response)
    }).catch((error) => {
        // console.log(error.response.data)
    });
})
