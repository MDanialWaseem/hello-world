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
                        <span>Products</span>
                    </li>
                </ul>
                <!--------------------
END - Breadcrumbs
-------------------->
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            <h6 class="element-header">All Products</h6>
                            <div class="element-box">
                                <h5 class="form-header">All Products</h5>
                               <!--  <div class="form-desc">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table..
                                    <a href="https://www.datatables.net/"
                                        target="_blank">Learn More about DataTables</a>
                                </div> -->
                               
                               <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Category </th>
        <th>Status</th>
        <th>Featured Status</th>
        <th>Image URL</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>the quick brown fox jumps over the lazy dog</td>
        <td>category1</td>
        <td>Published</td>
        <td>1</td>
        <td>uploads/image.png</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

<tr>
        <td>2</td>
        <td>the quick brown fox jumps over the lazy dog</td>
        <td>category1</td>
        <td>Published</td>
        <td>1</td>
        <td>uploads/image.png</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

      <tr>
        <td>3</td>
        <td>the quick brown fox jumps over the lazy dog</td>
        <td>category2</td>
        <td>Draft</td>
        <td>0</td>
        <td>uploads/image.png</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>
      

      <tr>
        <td>4</td>
        <td>the quick brown fox jumps over the lazy dog</td>
        <td>category3</td>
        <td>Pending</td>
        <td>1</td>
        <td>uploads/image.png</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>
    </tbody>
  </table>

                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    
    <?php include 'footer.php'; ?>  
