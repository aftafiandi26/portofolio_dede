<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sending Email</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate action="{{route('storeMails')}}">
         @csrf
        <div class="modal-body">        
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-2">
             <label for="from">Email:</label> 
            </div>
            <div class="col-10">
              <input type="email" class="form-control" id="from" placeholder="Enter Your Email" name="from"  > 
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>   
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-2">
             <label for="subject">Subject:</label> 
            </div>
            <div class="col-10">
              <input type="text" class="form-control" id="subject" name="subject"   placeholder="What Is Discussed?" max="5" > 
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>   
            </div>
          </div>
           <div class="row" style="margin-bottom: 10px;">            
            <div class="col-12">
             <textarea class="form-control"   placeholder="Enter Your Description" maxlength="500 word" name="description" style="height: 120px;" maxlength="5"></textarea>
             <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>              
            </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-sm btn-dark" style="background-color: #854847;">Send</button>
        </form>
         <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
