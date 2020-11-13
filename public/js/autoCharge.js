
    $(document).ready(function(){
    $('#modele_id').on('change',function(){

var modele_id=$(this).val();
$.get(route + '/vehicules/chargeMarque', {modele_id:modele_id},function(data){
  $('#marque_id').html(data);
});

});
