
// const btn0 = document.querySelector('.chev');
// btn0.addEventListener('click', () => {
//   btn0.classList.toggle('rotate');
// });

const btns = document.querySelectorAll('.chev1');
btns.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('rotate');
  });
});


var checkboxes  = document.querySelectorAll("input[type = 'checkbox']");
function checkAll(myCheckbox) {
  if(myCheckbox.checked == true) {
    checkboxes.forEach(function(checkbox) {
      checkbox.checked = true;
    });
  }
  else {
    checkboxes.forEach(function(checkbox){
      checkbox.checked =false;
    });
  }
}

