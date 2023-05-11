                <!-- Begin Page Content -->
                
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin Panel</h1>
                       
                    </div>
                  <hr>
                    <!-- Content Row -->
                   <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Employees</div>
                                        <div class="row no-gutters align-items-center">
                                          <h3>
                                            <strong>
                                          <?php
                                          echo $emplo_total;
                                           ?>
                                           </strong>
                                         </h3>
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-right"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-user-tie fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-info shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Users</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <h3>
                                            <strong>
                                          <?php
                                          echo $users_total;
                                           ?>
                                           </strong>
                                         </h3>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                        </div>

                       <!--  <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-primary shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold  text-uppercase mb-1">Total Transaction</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-receipt fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-warning shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Transaction</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-circle-notch fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-success shadow h-100 py-2">
                               
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Income (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-danger shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Expenditure (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-share-square fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
 -->
                       

                       <!--  <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-info shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Profit (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-hand-holding-usd fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
