let form = document.getElementById("form1");
form.addEventListener("submit",(e) => {
    e.preventDefault();
    let formData = new FormData(e.target);
    e.target.reset();
    console.log(formData.get("Phone"));
    fetch("/php-techn-task/check_phone.php", {
        method: "POST",
        body: formData,
      }).then((response) => response.json()).then((json) => alert(json["Country"]));
})

// КУКИСЫ
let limit = 24 * 60 * 60 * 1000; // 24 часа
let cookiesInitTime = localStorage.getItem('cookiesInitTime');
if((new Date()).getTime() - cookiesInitTime > limit){
    localStorage.removeItem('cookiesAccepted');
    localStorage.removeItem('cookiesInitTime');
}
if (!localStorage.getItem('cookiesAccepted')) {
    showPopup();
}

function showPopup() {
    let popup = document.getElementById('cookiePopup');
    popup.style.display = 'block';
}

function hidePopup() {
    var popup = document.getElementById('cookiePopup');
    popup.style.display = 'none';
}

document.getElementById('acceptButton').addEventListener('click',(e) => {
    localStorage.setItem('cookiesAccepted', 'true');
    localStorage.setItem('cookiesInitTime', (new Date()).getTime());
    hidePopup();
});

document.getElementById('closeButton').addEventListener('click', (e) => {
    localStorage.removeItem('cookiesAccepted');
    localStorage.removeItem('cookiesInitTime');
    hidePopup();
});