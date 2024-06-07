@extends('front-end.home')
@section('content')
 <!-- register -->
 <section class="wrap__section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- register -->
                <!-- Form Register -->

                <div class="card mx-auto" style="max-width:520px;">
                    <article class="card-body">
                        <header class="mb-4">
                            <h4 class="card-title">Sign up</h4>
                        </header>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div> <!-- form-group end.// -->
                                
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="">
                               
                            </div> <!-- form-group end.// -->
                           
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Create password</label>
                                    <input class="form-control" type="password">
                                </div> <!-- form-group end.// -->
                                <div class="form-group col-md-6">
                                    <label>Repeat password</label>
                                    <input class="form-control" type="password">
                                </div> <!-- form-group end.// -->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <label class="custom-control custom-checkbox"> <input type="checkbox"
                                        class="custom-control-input" checked="">
                                    <span class="custom-control-label"> I am agree with <a href="#">terms and
                                            contitions</a> </span>
                                </label>

                            </div> <!-- form-group// -->
                            <p class="text-center">Already Have an account? <a href="{{ route('login') }}">Log In</a> </p>
                          
                           
                            </div> <!-- form-group end.// -->
                        </form>
                    </article><!-- card-body.// -->
                </div>
                <!-- end register -->
            </div>
        </div>
    </div>
</section>
<!-- end register -->
</div>
<!-- END MAIN CONTENT -->
 @endsection
    