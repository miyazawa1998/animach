$(function(){ 
  $('.select__toggle').on('click',function(){
    $(this).next().slideToggle();
  })
});