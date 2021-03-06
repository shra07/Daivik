@include('layouts.header')

<body>

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="signup-wrapper">
        
        <div class="fake-nav">
            <a href="#" class="logo">
                <img src="assets/img/logo/friendkit.svg" width="112" height="28" alt="">
            </a>
        </div>
        
        <div class="process-bar-wrap">
            <div class="process-bar">
                <div class="progress-wrap">
                    <div class="track"></div>
                    <div class="bar"></div>
                    <div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
                        <i data-feather="smile"></i>
                    </div>
                    <div id="step-dot-2" class="dot is-second" data-step="20">
                        <i data-feather="user"></i>
                    </div>
                    <div id="step-dot-6" class="dot is-sixth" data-step="40">
                        <i data-feather="user"></i>
                    </div>
                    <div id="step-dot-3" class="dot is-third" data-step="60">
                        <i data-feather="image"></i>
                    </div>
                    <div id="step-dot-4" class="dot is-fourth" data-step="80">
                        <i data-feather="lock"></i>
                    </div>
                    <div id="step-dot-5" class="dot is-fifth" data-step="100">
                        <i data-feather="flag"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="outer-panel">
            <div class="outer-panel-inner">
                <div class="process-title">
                    <h2 id="step-title-1" class="step-title is-active">select your birthdate.  
                        <form  action="{{url('birthday')}}" method="post">
                       @csrf
                        <div class="form-group">
                            <div class="col-xs-5 date">
                                <input class="form-control" id="date" name="date" placeholder="DD-MM-YYYY" type="text"/>
                                <button>  submit </button> 
                             </div>
                        </div>
                        </form>
                    </h2>
                    <h2 id="step-title-2" class="step-title">Tell us more about you.</h2>
                    <h2 id="step-title-6" class="step-title">Tell us a bit more about you.</h2>
                    <h2 id="step-title-3" class="step-title">Upload a profile picture.</h2>
                    <h2 id="step-title-4" class="step-title">Secure your account.</h2>
                    <h2 id="step-title-5" class="step-title">You're all set. Ready?</h2>
                </div>
                
                <div id="signup-panel-1" class="process-panel-wrap is-active">
                    <div class="columns">
                        <div class="column is-6">
                            @if(!empty($date))
                            @if($date <= 18)
                            <div class="account-type">
                                <img src="assets/img/illustrations/signup/company.svg" alt="">
                                <h3>Child</h3>
                                <p>Create a child account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth is-rounded process-button" data-step="step-dot-2">
                                    Continue
                                </a>
                            </div>
                            @endif
                            @endif
                        </div>
                        @if(!empty($date))
                            @if($date >= 18)
                        <div class="column is-6">
                            <div class="account-type">
                                <img src="assets/img/illustrations/signup/public.svg" alt="">
                                <h3>Your-self</h3>
                                <p>Create a own account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth is-rounded process-button" data-step="step-dot-2">
                                    Continue
                                </a>
                            </div>
                            @endif
                            @endif
                        </div>
                        <!-- <div class="column is-4">
                            <div class="account-type">
                                <img src="assets/img/illustrations/signup/personal.svg" alt="">
                                <h3>Personal</h3>
                                <p>Create a company account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth is-rounded process-button" data-step="step-dot-2">
                                    Continue
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
                
                <div id="signup-panel-2" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="field">
                            <label>First Name</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Profile Name</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your profile name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Parent's Name</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your parent's name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your email address">
                            </div>
                        </div>
                    </div>
                
                    <div class="buttons">
                        <a class="button is-rounded process-button" data-step="step-dot-1">Back</a>
                        <a class="button is-rounded process-button is-next" data-step="step-dot-6">Next</a>
                    </div>
                </div>

                <div id="signup-panel-6" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                       
                        <div class="field field-group">
                            <label>City</label>
                            <div class="control has-icon">
                                <input type="text" class="input is-fade" value="Melbourne">
                                <div class="form-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                            </div>
                        </div>
                      
                        
                        <div class="field field-group">
                            <label>State</label>
                            <div class="control has-icon">
                                <input type="text" class="input is-fade" value="Melbourne">
                                <div class="form-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                            </div>
                        </div>
                       
                       
                        <div class="field field-group is-autocomplete">
                            <label>District</label>
                            <div class="control has-icon">
                                <input id="country-autocpl" type="text" class="input is-fade" value="Australia">
                                <div class="form-icon">
                                    <i data-feather="globe"></i>
                                </div>
                            </div>
                        </div>
                       
                        
                       
                        <!--Field-->
                        <div class="field field-group is-autocomplete">
                            <label>Country</label>
                            <div class="control has-icon">
                                <input id="country-autocpl" type="text" class="input is-fade" value="Australia">
                                <div class="form-icon">
                                    <i data-feather="globe"></i>
                                </div>
                            </div>
                        </div>
                       
                        <div class="field">
                            <label>Address</label>
                            <div class="control">
                                <textarea type="text" class="textarea is-fade" rows="2" placeholder="Fill in your address..." style="margin-top: 0px; margin-bottom: 0px; height: 59px;"></textarea>
                            </div>
                        </div>
                       
                    </div>
                
                    <div class="buttons">
                        <a class="button is-rounded process-button" data-step="step-dot-2">Back</a>
                        <a class="button is-rounded process-button is-next" data-step="step-dot-3">Next</a>
                    </div>
                </div>
                
                <div id="signup-panel-3" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="photo-upload">
                            <div class="preview">
                                <a class="upload-button">
                                    <i data-feather="plus"></i>
                                </a>
                                <img id="upload-preview" src="https://via.placeholder.com/150x150"
                                    data-demo-src="assets/img/avatars/avatar-w.png" alt="">
                                <form id="profile-pic-dz" class="dropzone is-hidden" action="https://friendkit.cssninja.io/"></form>
                            </div>
                            <div class="limitation">
                                <small>Only images with a size lower than 3MB are allowed.</small>
                            </div>
                        </div>
                    </div>
                
                    <div class="buttons">
                        <a class="button is-rounded process-button" data-step="step-dot-2">Back</a>
                        <a class="button is-rounded process-button is-next" data-step="step-dot-4">Next</a>
                    </div>
                </div>
                
                <div id="signup-panel-4" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="field">
                            <label>Password</label>
                            <div class="control">
                                <input type="password" class="input" placeholder="Choose a password">
                            </div>
                        </div>
                        <div class="field">
                            <label>Repeat Password</label>
                            <div class="control">
                                <input type="password" class="input" placeholder="Repeat your password">
                            </div>
                        </div>
                        <div class="field">
                            <label>Phone Number</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your phone number">
                            </div>
                        </div>
                    </div>
                
                    <div class="buttons">
                        <a class="button is-rounded process-button" data-step="step-dot-3">Back</a>
                        <a class="button is-rounded process-button is-next" data-step="step-dot-5">Next</a>
                    </div>
                </div>
                
                <div id="signup-panel-5" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <img class="success-image" src="assets/img/illustrations/signup/mailbox.svg" alt="">
                        <div class="success-text">
                            <h3>Congratz, you successfully created your account.</h3>
                            <p> We just sent you a confirmation email. PLease confirm your account within 24 hours.</p>
                            <a class="button is-fullwidth is-rounded" href="feed.html">Let Me In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!--Edit Credit card Modal-->
        <div id="crop-modal" class="modal mdl-modal is-small crop-modal is-animated">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <header class="modal-card-head">
                        <div class="modal-card-title">
                            <span>Crop your picture</span>
                        </div>
                        <button class="mdl-modal-close" aria-label="close">
                            <i data-feather="x"></i>
                        </button>
                    </header>
                    <div class="modal-card-body">
                        <div id="cropper-wrapper" class="cropper-wrapper">
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include('layouts.footer')