document.getElementById('loginForm').addEventListener('submit', function(event) {

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    
    const errorMessage = document.getElementById('error-message');
    
    errorMessage.textContent = '';
    
    if (email === '') {
        errorMessage.textContent = 'Email is required!';
        document.getElementById('email').focus();
        event.preventDefault(); 
        return; 
    }

    if (password === '') {
        errorMessage.textContent = 'Password is required!';
        document.getElementById('password').focus();
        event.preventDefault(); 
        return; 
    }
});
