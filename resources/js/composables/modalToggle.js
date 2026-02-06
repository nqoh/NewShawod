export const modalToggle = () =>{

   function modalOpen() {
       $('#modal-container').removeAttr('class').addClass('five');
       $('body').addClass('modal-active');
      }
     
      function modalClose(){
        $(this).addClass('out');
        $('body').removeClass('modal-active');
      };
   
      return { modalOpen , modalClose  }
}

