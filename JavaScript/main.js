const Toggle = () => {
    let temp = document.getElementById("pass");
    let sms = document.getElementById("sms");

    if (temp.type === "password") {
        temp.type = "text";
        sms.innerHTML = "Hide Password";
    } else {
        temp.type = "password";
        sms.innerHTML = "Show Password";
    }
}
const validate = () => {
    let captcha = document.getElementById("form1Example2");
    let errorMessage = document.getElementById('error');
    let inputVal = captcha.value;
    let pattern = /^[0-9]*$/;
    if (!pattern.test(inputVal)) {
        errorMessage.innerHTML = 'Please enter numbers only.';
        errorMessage.style.color = 'red';
    } else {
        errorMessage.innerHTML = 'Enter Captcha';
        errorMessage.style.color = '#3b71ca';
    }
}