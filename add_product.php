<?php include 'header.php'; ?>  

            <div class="content-w">
                <!--------------------
START - Breadcrumbs
-------------------->
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="add_product.php">Add Product</a>
                    </li>
                                    </ul>
                <!--------------------
END - Breadcrumbs
-------------------->
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Add Product</h6>
                                    <div class="element-box">
                                        <form>
                                            <h5 class="form-header">Add Product</h5>
                                            <!-- <div class="form-desc">Discharge best employed your phase each the of shine. Be met even reason consider logbook redesigns. Never a turned interfaces among asking</div> -->
                                            <div class="form-group">
                                                <label for="">Product Title</label>
                                                <input class="form-control" placeholder="Enter Product Title" type="text">
                                            </div>

                                             <div class="form-group">
                                                    <label> Product Body</label>
                                                    <textarea class="form-control" rows="6"></textarea>
                                                </div>

                                                <div class="form-group">
                                                <label for="">Excerpt</label>
                                                <input class="form-control" placeholder="Enter Excerpt" type="text">
                                            </div>


                                              <div class="form-group">
                                                <label for=""> Add category</label>
                                                <select class="form-control">
                                                    <option>Select Category</option>
                                                    <option>Category1</option>
                                                    <option>Category2</option>
                                                    <option>Category3</option>

                                                </select>



                                              <div class="form-group">
                                                <label for=""> Post Status</label>
                                                <select class="form-control">
                                                    <option>Select Status</option>
                                                    <option>Published</option>
                                                    <option>Draft</option>
                                                    <option>Pending</option>

                                                </select>
                                            </div>

                                             <div class="form-group">
                                                <label for="">Product Image</label>
                                                <input class="form-control" placeholder="Enter Product image" type="file">
                                            </div>

                                            <div class="checkbox">
  <label><input type="checkbox" value="">Featured</label>
</div>
                                           




                                        

                                      <div class="form-buttons-w">
                                                <button class="btn btn-primary" type="submit"> Add Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                      
                    
<?php include 'footer.php'; ?>  
