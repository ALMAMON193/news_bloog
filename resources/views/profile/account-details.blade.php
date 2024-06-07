<div class="content-wrapper">
  <div class="container-full">
  <section>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
  
              <h6 class="my-3"></h6>
              <p class="text-muted mb-1"><strong>Name:</strong>{{ Auth::user()->name }}</p>
              <div class="d-flex justify-content-center mb-2">
                <button  type="button" class="btn btn-outline-primary my-2 my-sm-0 " >123K</button>
                <span style="padding-left: 15px"></span>
                <button  type="button" class="btn btn-outline-primary my-2 my-sm-0" >234K</button>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="card-body">
                  <p>Already have an account? <a href="#">Log in instead!</a></p>
                  <form method="post" name="enq">
                      <div class="row">
                          <div class="form-group col-md-12 mb-3">
                              <label> Name <span class="required">*</span></label>
                              <input required="" class="form-control" name="name"
                                  type="text">
                          </div>
                          <div class="form-group col-md-12 mb-3">
                              <label>Email Address <span class="required">*</span></label>
                              <input required="" class="form-control" name="email"
                                  type="email">
                          </div>
                          <div class="form-group col-md-12 mb-3">
                            <label>Email Address <span class="required">*</span></label>
                            <input required="" class="form-control" name="phone"
                                type="number">
                        </div>
                        

                          
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-fill-out" name="submit"
                                  value="Submit">Save</button>
                          </div>
                      </div>
                  </form>
              </div>
           
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>
    </div>
  </div>