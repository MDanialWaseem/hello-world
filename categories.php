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
                        <span>Categories</span>
                    </li>
                </ul>
                <!--------------------
END - Breadcrumbs
-------------------->
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            <h6 class="element-header">All Categories</h6>
                            <div class="element-box">
                                <h5 class="form-header">All Categories</h5>
                               <!--  <div class="form-desc">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table..
                                    <a href="https://www.datatables.net/"
                                        target="_blank">Learn More about DataTables</a>
                                </div> -->
                               
                               <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Slug</th>
        <th>Created Date/Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>category1</td>
        <td>category1</td>
        <td>12-02-2018</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

      <tr>
        <td>2</td>
        <td>category2</td>
        <td>category2</td>
        <td>12-02-2018</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

      <tr>
        <td>3</td>
        <td>category3</td>
        <td>category3</td>
        <td>12-02-2018</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

      <tr>
        <td>4</td>
        <td>category4</td>
        <td>category4</td>
        <td>12-02-2018</td>
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
