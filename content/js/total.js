const plus = document.querySelectorAll(".plus");
const minus = document.querySelectorAll(".minus");
const num = document.querySelectorAll(".num");
const total = document.querySelector(".card-del_total");
let number = 0;
console.log(num);

plus.forEach(item => item.addEventListener("click", function() {
    number++;

}))