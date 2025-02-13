     <!-- sidebar code start -->
     <?php
        include('sidebar.php');
        ?>
     <!-- sidebar code end -->

     <?php
        include('mainheader.php');
        ?>
     <section>
         <div class="container-fluid pt-4">
             <div class="row g-4">
                 <div class="col-lg-6">
                     <div class="bg-light rounded p-4 h-100">
                         <h6>Forms</h6>
                         <form>
                             <div class="mb-3">
                                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                             </div>
                             <div class="mb-3">
                                 <label for="exampleInputPassword1" class="form-label">Password</label>
                                 <input type="password" class="form-control" id="exampleInputPassword1">
                             </div>
                             <div class="mb-3 form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                             </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="bg-light rounded p-4 h-100">
                         <h6>Forms</h6>
                         <div class="mb-3">
                             <label for="formFile" class="form-label">Default file input example</label>
                             <input class="form-control" type="file" id="formFile">
                         </div>
                         <div class="mb-3">
                             <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                             <input class="form-control" type="file" id="formFileMultiple" multiple>
                         </div>
                         <div class="mb-3">
                             <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                             <input class="form-control" type="file" id="formFileDisabled" disabled>
                         </div>
                         <div class="mb-3">
                             <label for="formFileSm" class="form-label">Small file input example</label>
                             <input class="form-control form-control-sm" id="formFileSm" type="file">
                         </div>
                         <div>
                             <label for="formFileLg" class="form-label">Large file input example</label>
                             <input class="form-control form-control-lg" id="formFileLg" type="file">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="bg-light rounded p-4 h-100">
                         <h6>Forms</h6>
                         <div class="input-group mb-3">
                             <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                             <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                         </div>

                         <div class="input-group mb-3">
                             <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                             <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                         </div>

                         <div class="input-group mb-3">
                             <button class="btn btn-outline-secondary" type="button">Button</button>
                             <button class="btn btn-outline-secondary" type="button">Button</button>
                             <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                         </div>

                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                             <button class="btn btn-outline-secondary" type="button">Button</button>
                             <button class="btn btn-outline-secondary" type="button">Button</button>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="bg-light rounded p-4 h-100">
                         <h6>Forms</h6>
                         <div class="input-group mb-3">
                             <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li><a class="dropdown-item" href="#">Another action</a></li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="#">Separated link</a></li>
                             </ul>
                             <input type="text" class="form-control" aria-label="Text input with dropdown button">
                         </div>

                         <div class="input-group mb-3">
                             <input type="text" class="form-control" aria-label="Text input with dropdown button">
                             <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                             <ul class="dropdown-menu dropdown-menu-end">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li><a class="dropdown-item" href="#">Another action</a></li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="#">Separated link</a></li>
                             </ul>
                         </div>

                         <div class="input-group">
                             <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Action before</a></li>
                                 <li><a class="dropdown-item" href="#">Another action before</a></li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="#">Separated link</a></li>
                             </ul>
                             <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                             <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                             <ul class="dropdown-menu dropdown-menu-end">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li><a class="dropdown-item" href="#">Another action</a></li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="#">Separated link</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 mb-3">
                     <div class="bg-light rounded p-4 h-100">
                         <h6>Forms</h6>
                         <form class="row gx-3 gy-2 align-items-center">
                             <div class="col-sm-3">
                                 <label class="visually-hidden" for="specificSizeInputName">Name</label>
                                 <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
                             </div>
                             <div class="col-sm-3">
                                 <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                 <div class="input-group">
                                     <div class="input-group-text">@</div>
                                     <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                 </div>
                             </div>
                             <div class="col-sm-3">
                                 <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                 <select class="form-select" id="specificSizeSelect">
                                     <option selected>Choose...</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>
                             </div>
                             <div class="col-auto">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                     <label class="form-check-label" for="autoSizingCheck2">
                                         Remember me
                                     </label>
                                 </div>
                             </div>
                             <div class="col-auto">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-lg-6 mb-3">
                     <div class="bg-light rounded p-4 h-100">
                         <h6>Forms</h6>
                         <form class="row gx-3 gy-2 align-items-center">
                             <div class="col-sm-3">
                                 <label class="visually-hidden" for="specificSizeInputName">Name</label>
                                 <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
                             </div>
                             <div class="col-sm-3">
                                 <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                 <div class="input-group">
                                     <div class="input-group-text">@</div>
                                     <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                 </div>
                             </div>
                             <div class="col-sm-3">
                                 <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                 <select class="form-select" id="specificSizeSelect">
                                     <option selected>Choose...</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>
                             </div>
                             <div class="col-auto">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                     <label class="form-check-label" for="autoSizingCheck2">
                                         Remember me
                                     </label>
                                 </div>
                             </div>
                             <div class="col-auto">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <?php
        include('mainfooter.php');
        ?>