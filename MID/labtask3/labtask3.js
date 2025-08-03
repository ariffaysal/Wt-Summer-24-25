

function handleSubmit() {
    
    
    var firstName = document.getElementById("firstName").value;

    var lastName = document.getElementById("lastName").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var contact = document.getElementById("contact").value;

    if (firstName ==="" || lastName==="" || city==="" || state==="" || contact==="") {
        alert('Please fill in all fields.');
        return false;
    }
    if (!/^\d{11}$/.test(contact)) {
        alert('Please enter a valid 11-digit contact number.');
        return false;
    }
    if (!/^[a-zA-Z]+$/.test(firstName) || !/^[a-zA-Z]+$/.test(lastName)) {
        alert('First Name and Last Name should only contain letters.');
        return false;
    }
    if (!/^[a-zA-Z\s]+$/.test(city) || !/^[a-zA-Z\s]+$/.test(state)) {
        alert('City and State should only contain letters and spaces.');
        return false;
    }
    if (firstName.length < 3 || lastName.length < 3) {
        alert('First Name and Last Name should be at least 3 characters long.');
        return false;
    }
    if (city.length < 3 || state.length < 3) {
        alert('City and State should be at least 3 characters long.');
        return false;
    }
    if (contact.length !== 11) {
        alert('Contact number should be exactly 11 digits long.');
        return false;
    }
    if (!/^\d+$/.test(contact)) {
        alert('Contact number should only contain digits.');
        return false;
    }
    

    

    document.getElementById("Form").reset();
    return false; 
}






