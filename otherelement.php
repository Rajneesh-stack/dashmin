 <!-- sidebar code start -->
 <?php
    include('sidebar.php');
    ?>
 <!-- sidebar code end -->

 <!-- content-bar code end -->
 <?php
    include('mainheader.php');
    ?>
 <!-- button section start -->
 <!-- other element section start -->
 <section>
     <div class="container-fluid pt-4">
         <div class="row g-4">
             <div class="col-lg-6">
                 <div class="bg-light rounded h-100 p-4">
                     <h6>Bootstarp alerts</h6>
                     <div class="alerts">
                         <div class="alert alert-primary" role="alert">
                             A simple primary alert—check it out!
                         </div>
                         <div class="alert alert-secondary" role="alert">
                             A simple secondary alert—check it out!
                         </div>
                         <div class="alert alert-success" role="alert">
                             A simple success alert—check it out!
                         </div>
                         <div class="alert alert-danger" role="alert">
                             A simple danger alert—check it out!
                         </div>
                         <div class="alert alert-warning" role="alert">
                             A simple warning alert—check it out!
                         </div>
                         <div class="alert alert-info" role="alert">
                             A simple info alert—check it out!
                         </div>
                         <div class="alert alert-light" role="alert">
                             A simple light alert—check it out!
                         </div>
                         <div class="alert alert-dark" role="alert">
                             A simple dark alert—check it out!
                         </div>
                     </div>
                 </div>

             </div>
             <div class="col-lg-6">
                 <div class="bg-light h-100 rounded p-4">
                     <h6>Link alerts</h6>
                     <div class="alerts">
                         <div class="alert alert-primary" role="alert">
                             A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                         </div>
                         <div class="alert alert-secondary" role="alert">
                             A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                         </div>
                         <div class="alert alert-success" role="alert">
                             A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                         </div>
                         <div class="alert alert-danger" role="alert">
                             A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                         </div>
                         <div class="alert alert-warning" role="alert">
                             A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                         </div>
                         <div class="alert alert-info" role="alert">
                             A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="bg-light h-100 rounded p-4">
                     <h6>Accordians</h6>
                     <div class="accordian">
                         <div class="accordion" id="accordionExample">
                             <div class="accordion-item">
                                 <h2 class="accordion-header">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                         Accordion Item #1
                                     </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                     <div class="accordion-body">
                                         <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                     </div>
                                 </div>
                             </div>
                             <div class="accordion-item">
                                 <h2 class="accordion-header">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         Accordion Item #2
                                     </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                     <div class="accordion-body">
                                         <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                     </div>
                                 </div>
                             </div>
                             <div class="accordion-item">
                                 <h2 class="accordion-header">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         Accordion Item #3
                                     </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                     <div class="accordion-body">
                                         <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="bg-light h-100 rounded p-4">
                     <h6>Accordians</h6>
                     <div class="accordian">
                         <div class="accordion accordion-flush" id="accordionFlushExample">
                             <div class="accordion-item">
                                 <h2 class="accordion-header">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                         Accordion Item #1
                                     </button>
                                 </h2>
                                 <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                 </div>
                             </div>
                             <div class="accordion-item">
                                 <h2 class="accordion-header">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                         Accordion Item #2
                                     </button>
                                 </h2>
                                 <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                 </div>
                             </div>
                             <div class="accordion-item">
                                 <h2 class="accordion-header">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                         Accordion Item #3
                                     </button>
                                 </h2>
                                 <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 mb-4">
                 <div class="bg-light h-100 rounded p-4">
                     <h6>Progress bar</h6>
                     <div class="accordian">
                         <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <div class="progress-bar bg-success " style="width: 25%"></div>
                         </div>
                         <div class="progress mb-3" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                             <div class="progress-bar bg-info" style="width: 50%"></div>
                         </div>
                         <div class="progress mb-3" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                             <div class="progress-bar bg-warning" style="width: 75%"></div>
                         </div>
                         <div class="progress mb-3" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                             <div class="progress-bar bg-danger" style="width: 100%"></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 mb-4">
                 <div class="bg-light h-100 rounded p-4">
                     <h6>Navs & Tabs</h6>
                     <div class="accordian">
                         <nav>
                             <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                 <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                 <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>

                         </nav>
                         <div class="tab-content" id="nav-tabContent">
                             <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem obcaecati facere natus alias iste hic. Placeat labore atque vel repudiandae?...</div>
                             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A tempore enim dolor ullam commodi quaerat sapiente adipisci facere nostrum earum laudantium, facilis aperiam dignissimos!...</div>
                             <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, eos?...</div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- other element section end -->
 <!-- footer section start -->
 <?php
    include('mainfooter.php');
    ?>
 <!--footer section end-->