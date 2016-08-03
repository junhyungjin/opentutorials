wbtn = document.getElementsById('white_btn');
wbtn.addEventListner('click', function() {
  document.getElementsById('target').className='white';
})

bbtn = document.getElementsById('black_btn');
bbtn.addEventListner('click', function() {
  document.getElementsById('target').className='black';
})
