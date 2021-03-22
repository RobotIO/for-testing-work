
let btn = document.getElementById('btnSearchFilter');
let input = document.getElementById('inputSearchFilter');

btn.addEventListener('click', function(e) {
    axios.post('/filter', {
        name: input.value
    }).then((response) => {
        console.log(response)
    }).catch((error) => {
        // console.log(error.response.data)
    });
})
