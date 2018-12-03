Echo.join('online')
    .here((users) => {
        alert('working???')
        console.log(users);
    })
    .joining((user) => {
        console.log(user);
    })
    .leaving((user) => {
        console.log(user);
    })