<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">{{Auth::user()->name}}</h5>
                    
                  <li class="mt">
                      <a class="active" href="dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Setup</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="locations">Location</a></li>
                          <li><a  href="categories">Category</a></li>
                          <li><a  href="metrics">Metric</a></li>
                          <li><a  href="#">Member</a></li>
                          <li><a  href="suppliers">Supplier</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="inventories">Inventory</a></li>
                          <li><a  href="stocks">Stocks</a></li>
                          <li><a  href="todo_list.html">Stock Movement</a></li>
                          <li><a  href="todo_list.html">SKUs</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="index.html">
                          <i class="fa fa-database"></i>
                          <span>Transactions</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->