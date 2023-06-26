const name = document.querySelector("#name");
const surname = document.querySelector("#surname");
const age = document.querySelector("#age");
const phone = document.querySelector("#phone");
const pesel = document.querySelector("#pesel");

const form = document.querySelector("#form");
console.log(form)
form.addEventListener("submit", (e) => {
    e.preventDefault();

    console.log(e);

    if (!/[0-9]{9}/.test(phone.value)) {
        alert("Invalid phone number");
    }

    const birthday = new Date(age.value);
    const today = new Date();

    if (birthday > today) {
        alert("Invalid date");
        return;
    }

    if (!/[0-9]{11}/.test(pesel)) {
        alert("11 digits required");
    }
    const peselArray = pesel.value.split('');
    const controlSum = peselArray[0]*1 + peselArray[1]*3 + peselArray[2]*7 + peselArray[3]*9 + peselArray[4]*1 + peselArray[5]*3 + peselArray[6]*7 + peselArray[7]*9 + peselArray[8]*1 + peselArray[9]*3;
    const controlNumber = 10 - ( controlSum % 10);
    const lastPeselNumber = peselArray(peselArray.lenght-1);

    console.log('liczba kontrolna', controlNumber)
    console.log('ostatnia cyfra pesel:', lastPeselNumber)



    if(lastPeselNumber === controlNumber){
        console.log("Suma kontrolna nie ok")
        alert("Invalid pesel number");
        return;
    }



   form.submit();
});