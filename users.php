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
                        <span>Users</span>
                    </li>
                </ul>
                <!--------------------
END - Breadcrumbs
-------------------->
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            <h6 class="element-header">All Users</h6>
                            <div class="element-box">
                                <h5 class="form-header">All Users</h5>
                               <!--  <div class="form-desc">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table..
                                    <a href="https://www.datatables.net/"
                                        target="_blank">Learn More about DataTables</a>
                                </div> -->
                               
                               <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>User Name</th>
        <th>Created Date/Time</th>
        <th>Roles</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Example</td>
        <td>example@lbs.com</td>
        <td>example</td>
        <td>12-02-2018</td>
        <td>user</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

      <tr>
        <td>2</td>
        <td>Example2</td>
        <td>eample2@lbs.com</td>
        <td>example</td>
        <td>12-02-2018</td>
        <td>user</td>
        <td><button type="button" class="btn btn-default btn-xs">Edit</button> || 
<button type="button" class="btn btn-primary btn-xs">Delete</button></td>
      </tr>

      <tr>
        <td>3</td>
        <td>Example3</td>
        <td>example3@lbs.com</td>
        <td>example3</td>
        <td>12-02-2018</td>
        <td>user</td>
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
