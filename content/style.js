// // Lấy danh sách tất cả các slide
// const slides = document.querySelectorAll('.slide');

// // Thiết lập biến cho slide hiện tại và slide kế tiếp
// let currentSlide = 0;
// let nextSlide = 1;

// // Hiển thị slide đầu tiên
// slides[currentSlide].classList.add('active');

// // Lấy button previous và next
// const prevBtn = document.querySelector('.prevBtn');
// const nextBtn = document.querySelector('.nextBtn');

// // Thiết lập sự kiện click cho button previous
// prevBtn.addEventListener('click', () => {
//     // Ẩn slide hiện tại
//     slides[currentSlide].classList.remove('active');
//     // Tính toán slide trước đó và hiển thị
//     currentSlide--;
//     if (currentSlide < 0) {
//         currentSlide = slides.length - 1;
//     }
//     slides[currentSlide].classList.add('active');
// });

// // Thiết lập sự kiện click cho button next
// nextBtn.addEventListener('click', () => {
//     // Ẩn slide hiện tại
//     slides[currentSlide].classList.remove('active');
//     // Tính toán slide kế tiếp và hiển thị
//     currentSlide++;
//     if (currentSlide >= slides.length) {
//         currentSlide = 0;
//     }
//     slides[currentSlide].classList.add('active');
// });