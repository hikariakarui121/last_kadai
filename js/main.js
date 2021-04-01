
  const btn = document.querySelector('#btn');
  // const test =document.getElementById('test');
  const contents = document.querySelector('.btn-1');

  contents.addEventListener("click", ()=>{
    const results = ['グー','チョキ','パー'];
    const n =Math.floor(Math.random()*results.length);


      if(n==0){
        // btn.textContent=results[0];
        document.getElementById("test").src="image/1.jpg";
        // btn.addClass("inview");
        // document.getElementById('test').src="image/1.jpg"
        // console.log(test)
        // test.src="image/3.jpg"

      }else if(n==1){
        // btn.textContent=results[1];
        document.getElementById("test").src="image/2.jpg";

        // btn.addClass("inview2");
        // document.getElementById('test').src="image/2.jpg"
  
      }else{
        // btn.textContent=results[2];
        document.getElementById("test").src="image/3.jpg";

        // btn.addClass("inview3");
        // document.getElementById('test').src="image/3.jpg"
      }
  });

  // if(n===1){
  //   btn.write('<img src="image/1.jpg"></img>');
  // }



  // switch(n){
  //   case 0:
  //     btn.textContent ="グー";
  //     break;
  //   case 1:
  //     btn.textContent ="チョキ";
  //     break;
  //   case 2:
  //     btn.textContent ="パー";
  //     break;

  // }