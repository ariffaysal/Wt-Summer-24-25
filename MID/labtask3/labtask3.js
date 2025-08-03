

function handleSubmit() {
    
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const city = document.getElementById('city').value.trim();
    const state = document.getElementById('state').value.trim();
    const contact = document.getElementById('contact').value.trim();
    if (!firstName || !lastName || !city || !state || !contact) {
        alert('Please fill in all fields.');
        return;
    }
    if (!/^\d{11}$/.test(contact)) {
        alert('Please enter a valid 11-digit contact number.');
        return;
    }
    if (!/^[a-zA-Z]+$/.test(firstName) || !/^[a-zA-Z]+$/.test(lastName)) {
        alert('First Name and Last Name should only contain letters.');
        return;
    }
    if (!/^[a-zA-Z\s]+$/.test(city) || !/^[a-zA-Z\s]+$/.test(state)) {
        alert('City and State should only contain letters and spaces.');
        return;
    }
    if (firstName.length < 3 || lastName.length < 3) {
        alert('First Name and Last Name should be at least 3 characters long.');
        return;
    }
    if (city.length < 3 || state.length < 3) {
        alert('City and State should be at least 3 characters long.');
        return;
    }
    if (contact.length !== 11) {
        alert('Contact number should be exactly 11 digits long.');
        return;
    }
    if (!/^\d+$/.test(contact)) {
        alert('Contact number should only contain digits.');
        return;
    }
    alert(`First Name: ${firstName}\nLast Name: ${lastName}\nCity: ${city}\nState: ${state}\nContact: ${contact}`);
    document.getElementById('Form').reset();

    alert('Form submitted successfully!');
    alert(firstName + ' ' + lastName + ' from ' + city + ', ' + state + ' with contact number ' + contact + ' has been submitted successfully.');
}



document.getElementById('Form').addEventListener('submit', handleSubmit);
document.getElementById('Form').addEventListener('reset', function() {
    document.getElementById('firstName').value = '';
    document.getElementById('lastName').value = '';
    document.getElementById('city').value = '';
    document.getElementById('state').value = '';
    document.getElementById('contact').value = '';
}
);
