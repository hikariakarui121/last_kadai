  const target =document.querySelector('.title__image');

  function callback(entries, obs){
    console.log(entries[0]);

    if(entries[0].isIntersecting){
      // くらすをつける
      entries[0].target.classList.add('appear');
    }else{
      // クラスを外す
      // entries[0].target.classList.remove('appear');
      return
    }

    // 処理を終了させる処理。
    obs.unobserve(entries[0].target);
  }

  const options ={
    threshold:[0.1],
  }
  
  const observer = new IntersectionObserver(callback, options);

  observer.observe(target);
  