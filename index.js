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