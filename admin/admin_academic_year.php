<section id="admin_academic_year" class="admin_academic_year sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-9">
          <div class="section-header">
            <h2>Academic Year</h2>
          </div>
          </div>
          <div class="col-md-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAcademicYear">
             Add academic year
         </button>
          </div>
        </div>

        <div class="modal fade" id="addAcademicYear" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Academic year</h5>
        <?php echo @$err;?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" enctype="multipart/form-data">
      <div class="modal-body">
      
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="staff_name" placeholder="Enter staff name" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required>
          </div>
         
          
          <!--<button type="submit" class="btn btn-primary" name="save">Save</button>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Save" class="btn btn-primary" name="save"/>
        
      </div>
      </form>
    </div>
  </div>
</div>
 
      </div>

</section>