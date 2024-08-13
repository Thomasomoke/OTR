const getTodos = (callback) => {
    const request = new XMLHttpRequest();
// track the progress of a request
request.addEventListener('readystatechange', ()=>{

    // console.log(request, request.readyState);
    if (request.readyState === 4 && request.status === 200){
        const data = JSON.parse(request.responseText);
        callback(undefined, data);
        // console.log(request, request.responseText);
    } else if(request.readyState === 4){
        callback('could not fetch data', undefined);
        // console.log('Big error');
    }
});


request.open('GET', 'https://jsonplaceholder.typicode.com/todos/');
request.send();

}
getTodos((err, data) => {
    console.log('callback fired');
    // console.log(err, data);
    if(err){
        console.log(err);
    } else {
        console.log(data);
    }

});




// HTTPS STATUS CODE