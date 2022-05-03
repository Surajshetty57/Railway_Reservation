<script>
$(document).ready(function(){
  var i=1;

    $('#add').click(function(){
       let total_passenger = $('#passenger').val(); // get total passengers 
       let total_details   = $('.passenger_detail').length; // get total rows with class total_details
       if(total_details < total_passenger){ // check the condition
       
        i++;

        $('#a').append('<tr class="passenger_detail" id="row'+i+'"><th><input type="text" name="pname[]" placeholder="Name" class="form-control name_list" /></th><th ><input type="number" name="age[]" placeholder="Age" class="form-control name_list" min="5" max="130" /></th><th scope=""><select class="form-control" id="gender[]" name="gender[]"  placeholder="gender" width=""> <option>Male</option> <option>Female</option></select></th><th><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></th></tr>');  // use clone() here, then add id
       
      }else{
        alert('Passenger details cannot be greater than no. of passengers'); // your custom message
       }
    });

    $(document).on('click', '.btn_remove', function(){ 
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });

});

function sum()
{
  var price = document.getElementById('price').value;
    var passenger = document.getElementById('passenger').value;
    var result = (parseInt(price) * parseInt(passenger));
    if (!isNaN(result)) {
      document.getElementById('fare').value = result;
    }
}; 
</script>
