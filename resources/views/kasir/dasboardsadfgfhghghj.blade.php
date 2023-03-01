<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Smart Cashier - Dasboard</title>
    	<!-- FAVICONS ICON -->
	  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/png/LogoOnly.png') }}" />
    <!-- End FAVICONS ICON -->
    <!-- Dasboard Kasir -->
    <link href="{{ asset('assets/dskasir/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dskasir/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dskasir/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dskasir/css/icons.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('assets/dskasir/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dskasir/plugins/chosen/chosen.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dskasir/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('assets/dskasir/plugins/dataTables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dskasir/plugins/dataTables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('assets/dskasir/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <!-- Dasboard Kasir -->
    </head>
  <body>
    
  <div class="main_app">

  <div id="loading"></div>
  <div class="container">
        <div class="row">
                <div class="col-sm-12">

                             <div class="button-list pull-left m-t-15 m-l-10">  
                        
                            <div class="btn-group p_one">
                            <button id="productModal" data-toggle="modal" data-target="#Products" type="button" class="btn btn-default waves-effect waves-light">
                                    <span class="btn-label"><i class=" 	glyphicon glyphicon-barcode"></i> </span>  Products   
                            </button>
                            <button id="newProductModal" data-toggle="modal" data-target="#newProduct" type="button" class="btn btn-warning waves-effect waves-light">
                                    <i class="fa fa-plus"></i> 
                            </button>
                            </div>

                            <div class="btn-group p_two">
                            <button id="categoryModal" data-toggle="modal" data-target="#Categories" type="button" class="btn btn-default waves-effect waves-light">
                                    <span class="btn-label"><i class="glyphicon glyphicon-th"></i> </span>  Categories   
                            </button>
                            <button id="newCategoryModal" data-toggle="modal" data-target="#newCategory" type="button" class="btn btn-warning waves-effect waves-light">
                                <i class="fa fa-plus"></i> 
                            </button>
                            </div>
                   
                            <button id="viewRefOrders" data-toggle="modal" data-target="#holdOrdersModal" type="button" class="btn btn-info waves-effect waves-light">
                                    <span class="btn-label"><i class="fa fa-shopping-basket"></i> </span> Open Tabs
                            </button>
            
                            <button id="viewCustomerOrders" data-toggle="modal" data-target="#customerModal" type="button" onclick="$(this).getCustomerOrders()" class="btn btn-info waves-effect waves-light">
                                    <span class="btn-label"><i class="fa fa-user"></i> </span> Customer Orders
                            </button>
                        
                    </div>



                    
                    <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">

                    <div class="button-list pull-right m-t-15 m-l-10">  

                            <button id="settings" data-toggle="modal" data-target="#settingsModal"  type="button"  class="btn btn-default waves-effect waves-light p_five">
                                <i class="glyphicon glyphicon-cog"></i>
                          </button>

                            <button id="transactions" type="button" class="btn btn-default waves-effect waves-light p_three">
                            <span class="btn-label"><i class=" 	glyphicon glyphicon-credit-card"></i> </span>  Transactions 
                            </button>

                            <button id="pointofsale" type="button" class="btn btn-default waves-effect waves-light">
                                <span class="btn-label"><i class=" 	glyphicon glyphicon-shopping-cart"></i> </span>  Point of Sale
                            </button>

                            <div class="btn-group p_four">
                                <button id="usersModal" data-toggle="modal" data-target="#Users" type="button" class="btn btn-default waves-effect waves-light">
                                        <span class="btn-label"><i class=" 	glyphicon glyphicon-user"></i> </span>  Users  
                                </button>
                                <button id="add-user" data-toggle="modal"   type="button" class="btn btn-dark waves-effect waves-light">
                                        <i class="fa fa-plus"></i> 
                                </button>
                             </div>


                            <button type="button"  class="btn btn-light waves-effect waves-light" id="cashier">
                                <span class="btn-label"><i class="glyphicon glyphicon-user"></i> </span> <span id="loggedin-user"></span>
                         </button>

                            <a type="button" href="/logout" id="log-out"  type="button"  class="btn btn-warning waves-effect waves-light">
                                    <i class="glyphicon glyphicon-log-out"></i>
                            </a>
            
            
                            <button id="quit"  type="button" class="btn btn-danger waves-effect waves-light">
                                    <i class="glyphicon glyphicon-off"></i>
                            </button>
                        
                    </div>
        
                </div>
            </div>
            <br>

    <div id="transactions_view">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box"> 
                    <div class="row">               
                        <h3 class="col-md-2">Transactions</h3> 
                        <div class="col-md-1">
                            <span>Till</span>
                            <select id="tills" class="form-control">                              
                            </select>
                        </div>
                        <div class="col-md-2">
                            <span>Cashier</span>
                            <select id="users" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-1">
                            <span>Status</span>
                            <select id="status" class="form-control status">
                                <option value="1">Paid</option>
                                <option value="0">Unpaid</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span style="width: 100%;">Date</span>
                            <div id="reportrange">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span> <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>   
                        <hr>
                        <div class="row">
                           

                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-8" id="productSales">
                                            <h4>Products</h4>
                                            <hr>
                                            <table class="table tablesaw-enhanced" id="productsSold">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Sold</th>
                                                        <th>Available</th> 
                                                        <th>Sales</th>                                                                                                           
                                                    </tr>
                                                </thead>
                                                <tbody id="product_sales"></tbody>
                                            </table>
                                    </div>
                                    <div class="col-md-4" id="totals">
                                            <h4>Total</h4>
                                            <hr>
                                    
                                            <div id="total_sales" class="btn-success">
                                                <h5>SALES</h5>
                                                <div id="counter">0</div>
                                            </div>
                                       
                                            <div id="total_transactions" class="btn-warning">
                                                <h5>TRANSACTIONS</h5>
                                                <div id="counter">0</div>
                                            </div>
                                
                                            <div id="total_items" class="btn-info">
                                                <h5>ITEMS</h5>
                                                <div id="counter">0</div>
                                            </div>

                                            <div id="total_products" class="btn-default">
                                                <h5>PRODUCTS</h5>
                                                <div id="counter">0</div>
                                            </div>
                                                                         
                                    </div>
                                   
                               </div>
                           </div>

                           <div class="col-md-7">
                            <table class="table tablesaw-enhanced" id="transactionList">
                                <thead>
                                    <tr>                                                                      
                                        <th>Invoice</th>                                      
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Paid</th>
                                        <th>Change</th>
                                        <th>Method</th>
                                        <th>Till</th>
                                        <th>Cashier</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody id="transaction_list"></tbody>
                            </table>
                        </div>

                      </div>                    
                </div>
            </div>
        </div>
   </div>


   <div id="pos_view">
      <div class="row">
          <div class="col-md-4">
              <div class="card-box" id="card-box">
                  <div class="col-md-12">
                      <div class="row">
                          <div class="col-md-10">
                              <select name="" id="customer" class="form-control">
                          </select>
                          </div>
                          <div class="col-md-2">
                              <button data-toggle="modal" data-target="#newCustomer" class="btn btn-success"><i class="fa fa-plus"></i></button>
                          </div>
                      </div>
                      <div class="input-group m-t-5">
                          <form action="" id="searchBarCode">
                              <input type="text" required id="skuCode" name="skuCode" class="form-control" placeholder="Scan barcode or type the number then hit enter" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <input type="submit" style="display:none;">
                          </form>
                          <span class="input-group-addon" id="basic-addon2">
                              <i class="glyphicon glyphicon-ok"></i>
                          </span>
                      </div>
                  </div>
                  <div>
                      <table class="table m-0" id="cartTable">
  
                          <thead>
                          <tr>
                              <th>#</th>
                              <th width="150px">Item</th>
                              <th width="170px">Qty</th>
                              <th>Price</th>
                              <th width="5px">
                                  <button onclick="$(this).cancelOrder()" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                              </th>
                          </tr>
                          </thead>
                          <tbody>
  
  
                          </tbody>
  
                      </table>
                  </div>
  
                  <hr>
                 <div class="m-t-5">
                     <div class="row">
                         <div class="col-md-3">Total Item(s)</div>
                         <div class="col-md-3">: <sapn id="total">0</sapn></div>
                         <div class="col-md-3">Price :</div>
                         <div class="col-md-3">: <span id="price">0.0</span></div>
                     </div>
                     <div class="row">
                         <div class="col-md-3">Discount</div>
                         <div class="col-md-3"><input class="form-control" type="number" id="inputDiscount" oninput="$(this).calculateCart();"></div>
                         <div class="col-md-3">Gross Price (inc <span id="taxInfo"></span>% Tax)</div>
                         <div class="col-md-3"><h3 id="gross_price">0.00</h3></div>
                     </div>
  
                 </div>
  
                  <div class="button-list pull-right">

                    <button onclick="$(this).submitDueOrder(3);" type="button" class="btn btn-info waves-effect waves-light">
                        <i class="fa fa-print"></i> 
                    </button>

                      <button  onclick="$(this).cancelOrder()" type="button" class="btn btn-danger waves-effect waves-light">
                          <span class="btn-label"><i class="fa fa-ban"></i></span>Cancel
                      </button>
  
                      <button type="button" id="hold" class="btn btn-default waves-effect waves-light">
                          <span class="btn-label"><i class="fa fa-hand-paper-o"></i></span>Hold
                      </button>
  
                      <button type="button" id="payButton" class="btn btn-success waves-effect waves-light">
                          <span class="btn-label"><i class="fa fa-money"></i></span>Pay
                      </button>
                  </div>
                  <hr>
  
              </div>
          </div>
          <div class="col-md-8">
              <div class="card-box">
                  <div class="row">
                      <div class="col-md-4">
                          <input type="text" id="search" class="form-control" placeholder="Search product by name or sku">
                      </div>
                      <div class="col-md-8">
                          <div class="" id="categories">
                              
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="row" id="parent"> 
                      
                  </div>
  
              </div>
          </div>
      </div>
  </div>
  
  <div id="dueModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="mySmallModalLabel">Hold Order
                      <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                  </h4>
              </div>
              <div class="modal-body">
                  <form action="">
                      <input type="text" id="refNumber" placeholder="Enter a reference" class="form-control">
                  </form>
                  <hr>
                  <div class="row">
                      <div class="col-md-4">
                          <button onclick="$(this).go(1,true);" class="btn btn-success btn-lg btn-block">1</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(2,true);" class="btn btn-success btn-lg btn-block">2</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(3,true);" class="btn btn-success btn-lg btn-block">3</button>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-md-4">
                          <button onclick="$(this).go(4,true);" class="btn btn-success btn-lg btn-block">4</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(5,true);" class="btn btn-success btn-lg btn-block">5</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(6,true);" class="btn btn-success btn-lg btn-block">6</button>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-md-4">
                          <button onclick="$(this).go(7,true);" class="btn btn-success btn-lg btn-block">7</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(8,true);" class="btn btn-success btn-lg btn-block">8</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(9,true);" class="btn btn-success btn-lg btn-block">9</button>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-md-4">
                          <button onclick="$('#refNumber').val($('#refNumber').val().substr(0,$('#refNumber').val().length -1))" class="btn btn-success btn-lg btn-block">⌫</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$(this).go(0,true);" class="btn btn-success btn-lg btn-block">0</button>
                      </div>
                      <div class="col-md-4">
                          <button onclick="$('#refNumber').val('')" class="btn btn-success btn-lg btn-block">AC</button>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" onclick="$(this).submitDueOrder(0);" class="btn btn-primary btn-block btn-lg waves-effect waves-light">Hold Order</button>
              </div>
  
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--  Modal content for the above example -->
  <div id="paymentModel" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="myLargeModalLabel">Payment</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="list-group">
                              <a href="javascript:void(0)" id="cash" onclick="paymentType = 1" class="list-group-item active">
                                  Cash
                              </a>
                            <a href="javascript:void(0)" id="card" onclick="paymentType = 3" class="list-group-item">Card</a>
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="input-group">
                              <span class="input-group-addon" id="basic-addon3">Price <span id="price_curr"></span>
                              <input id="payablePrice" readonly type="number"  class="form-control" aria-describedby="basic-addon3">
                          </div>
                          <br>
                          <div class="input-group">
                              <span class="input-group-addon" id="basic-addon3">Payment  <span id="payment_curr"></span> </span>
                              <input type="text" placeholder="0.0" class="form-control" id="payment" aria-describedby="basic-addon3">
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-md-9">
                                  <div class="row">
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(1,false);" class="btn btn-success btn-lg btn-block">1</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(2,false);" class="btn btn-success btn-lg btn-block">2</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(3,false);" class="btn btn-success btn-lg btn-block">3</button>
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(4,false);" class="btn btn-success btn-lg btn-block">4</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(5,false);" class="btn btn-success btn-lg btn-block">5</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(6,false);" class="btn btn-success btn-lg btn-block">6</button>
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(7,false);" class="btn btn-success btn-lg btn-block">7</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(8,false);" class="btn btn-success btn-lg btn-block">8</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(9,false);" class="btn btn-success btn-lg btn-block">9</button>
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-3">
                                          <button onclick="$('#payment').val($('#payment').val().substr(0,$('#payment').val().length -1));$(this).calculateChange();" class="btn btn-success btn-lg btn-block">⌫</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).go(0,false);" class="btn btn-success btn-lg btn-block">0</button>
                                      </div>
                                      <div class="col-md-3">
                                          <button onclick="$(this).digits()" class="btn btn-success btn-lg btn-block">.</button>
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <button onclick="$('#payment').val('');$(this).calculateChange();" class="btn btn-danger btn-block btn-lg">AC</button>
                              </div>
                          </div>
                          <br>
                          <div class="input-group" id="cardInfo">
                              <span class="input-group-addon" id="basic-addon3">Card Info </span>
                              <input type="text" class="form-control" id="paymentInfo" aria-describedby="basic-addon3">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="btn btn-primary btn-block btn-lg waves-effect waves-light">Change <span id="change_curr"></span><span id="change"></span> </div>
                      </div>
                      <div class="col-md-6">
                        <button type="button" id="confirmPayment" class="btn btn-default btn-block btn-lg waves-effect waves-light">Confirm Payment</button>
                    </div>
                  </div>
                  
                  
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <div id="newCustomer" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="mySmallModalLabel">New Customer
                      <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                  </h4>
              </div>
              <div class="modal-body">
                  <form id="saveCustomer" data-parsley-validate>
                      <div class="form-group">
                          <label for="userName">Customer Name*</label>
                          <input type="text" required="required"  name="name" parsley-trigger="change" placeholder="Enter name" class="form-control" id="userName">
                      </div>
                      <div class="form-group">
                          <label for="userName">Customer Phone</label>
                          <input type="text" name="phone" parsley-trigger="change" placeholder="Enter Phone number" class="form-control" id="phoneNumber">
                      </div>
                      <div class="form-group">
                          <label for="userName">Customer Email</label>
                          <input type="email" name="email" parsley-trigger="change" placeholder="Enter email address" class="form-control" id="emailAddress">
                      </div>
                      <div class="form-group">
                          <label for="userName">Customer Address</label>
                          <input type="text" name="address" parsley-trigger="change" placeholder="Enter address" class="form-control" id="userAddress">
                      </div>

                      <input type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                  </form>
              </div>
          </div>
      </div>
  </div>



  <div id="newProduct" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Product
                        <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                    </h4>
                </div>
                <div class="modal-body">
                    <form id="saveProduct" encType="multipart/form-data">
                        <input type="hidden" name="id" id="product_id">
                        <input type="hidden" name="img" id="img">
                        <input type="hidden" name="remove" id="remove_img">
                        <div class="form-group">
                            <label for="userName">Category</label>
                            <select name="category" class="form-control" id="category"></select>
                        </div>
                        <div class="form-group">
                            <label for="userName">Product Name</label>
                            <input type="text" required="required"  name="name" parsley-trigger="change" placeholder="Enter a product name" class="form-control" id="productName">
                        </div>
                        <div class="form-group">
                            <label for="userName">Price</label>
                            <input type="text" required="required" name="price" placeholder="Price" class="form-control" id="product_price">
                        </div>
                        <div class="form-group">
                            <label for="userName">Stock</label>
                            <input type="text" name="quantity" placeholder="Available stock" class="form-control" id="quantity">
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" name="stock" id="stock" style="max-width: 30px; float: left;">  Disable stock check </label>
                        </div>
                        <div class="form-group">
                            <label for="userName"><span id="rmv_img" class="btn btn-xs btn-warning">Remove</span> Picture </label>                      
                            <div id="current_img"></div>
                            <input type="file" name="imagename" id="imagename">                            
                        </div>
  
                        <input type="submit" id="submitProduct" class="btn btn-primary btn-block waves-effect waves-light">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="newCategory" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="mySmallModalLabel">Category
                            <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form id="saveCategory">
                            <div class="form-group">
                                <label for="userName">Name</label>
                                <input id="category_id" type="hidden" name="id">
                                <input id="categoryName" type="text" required="required"  name="name" placeholder="Enter a category name" class="form-control" >
                            </div>
                          
                            <input type="submit" id="submitCategory" class="btn btn-primary btn-block waves-effect waves-light">
                        </form>
                    </div>
               </div>
          </div>
     </div>



     <div id="Products" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="mySmallModalLabel">Products
                            <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                            <button class="btn btn-white pull-right" id="print_list">Download</button>
                        </h4>                        
                    </div>
                     <div class="modal-body" id="all_products" style="padding: 20px; padding-right: 40px;"> 
                        <table class="table table-bordered" id="productList">
                            <thead>
                                <tr>                                                                      
                                    <th>Barcode</th>
                                    <th>Item</th>
                                    <th>Name</th>                                      
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="product_list"></tbody>
                        </table>

                    </div>
               </div>
          </div>
     </div>




     <div id="Users" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Users
                        <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                     </h4>                        
                </div>
                 <div class="modal-body" id="all_userss" style="padding: 20px; padding-right: 40px;"> 
                    <table class="table table-bordered" id="userList">
                        <thead>
                            <tr>                                                                      
                                <th>Name</th>                                      
                                <th>Username</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="user_list"></tbody>
                    </table>

                </div>
           </div>
      </div>
 </div>




     <div id="Categories" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="mySmallModalLabel">Categories
                            <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                        </h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered" id="categoryList">
                            <thead>
                                <tr> 
                                    <th>Name</th>                                      
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="category_list"></tbody>
                        </table>

                    </div>
               </div>
          </div>
     </div>



     <div id="userModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Account Infomarion
                        <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                    </h4>
                </div>
                <div class="modal-body">
                    <form id="saveUser" data-parsley-validate>
                        <input type="hidden" name="id" id="user_id">
                        <div class="form-group">
                            <label for="userName">Name*</label>
                            <input type="text" required="required"  name="fullname" parsley-trigger="change" placeholder="Enter name" class="form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="userName">Username*</label>
                            <input type="text" name="username" parsley-trigger="change" placeholder="Login Username" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="userName">Password</label>
                            <input type="password" name="password" parsley-trigger="change" placeholder="Password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="userName">Repeat Password</label>
                            <input type="password" name="pass" parsley-trigger="change" placeholder="Repeat" class="form-control" id="pass">
                        </div>

                        <div class="perms">

                            <h4 style="font-size: 22px; margin-top: 20px;">Permissions</h4>
                            <hr>
    
                            <div class="form-group">
                                  <span><input type="checkbox" name="perm_products" id="perm_products"> Manage Products and Stock </span>
                            </div>
                            <div class="form-group">
                                <span><input type="checkbox" name="perm_categories" id="perm_categories"> Manage Product Categories </span>
                          </div>
                          <div class="form-group">
                            <span><input type="checkbox" name="perm_transactions" id="perm_transactions"> View Transactions </span>
                           </div>
                                <div class="form-group">
                                    <span><input type="checkbox" name="perm_users" id="perm_users"> Manage Users and Permissions </span>
                            </div>
                            <div class="form-group">
                                <span><input type="checkbox" name="perm_settings" id="perm_settings"> Manage Settings </span>
                            </div>
    
                        </div>
           
                        <input type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                    </form>
                </div>
           </div>
      </div>
 </div>





 <div id="holdOrdersModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Open Orders</h4>
            </div>
            <div class="modal-body">
                <input type="text" id="holdOrderInput" placeholder="Search order by reference" class="holdOrderInput form-control">
                <div class="holdOrderKeyboard"></div>
                <br>
                <div class="row" style="height: 460px;overflow-x: hidden;overflow-y:scroll" id="randerHoldOrders">
                    <p>please wait <span class="dot"></span> </p>  
                </div>
            </div>
        </div>
    </div>
</div>




 
<div id="customerModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Customer Orders</h4>
            </div>
            <div class="modal-body">
                <input type="text" id="holdCustomerOrderInput" placeholder="Search order by customer name" class="holdCustomerOrderInput form-control">
                <div class="customerOrderKeyboard"></div>
                <br>
                <div class="row" style="height: 460px; overflow: scroll;" id="randerCustomerOrders">
                    <p>please wait <span class="dot"></span> </p>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="orderModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-sm btn-default" onclick="$(this).print()">Print</button> <br> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
            <div class="modal-body" id="viewTransaction">                 
            </div>

            <div class="alert alert-danger" style="font-size:11px;">Right-Click and Reload if you get stuck after cancelling a print.</div>
        </div>
    </div>
</div>


     <div id="settingsModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="mySmallModalLabel">Settings
                            <img  class="loading m-t-5" style="margin-left: 35%" height="50px" src="assets/images/loading.gif" alt="">
                        </h4>
                    </div>
                    <div class="modal-body">  
                        
                        
                        <div class="form-group">
                        <label for="app">Application</label>
                        <select name="app" id="app" class="form-control">
                            <option>Standalone Point of Sale</option>
                            <option>Network Point of Sale Terminal</option>
                            <option>Network Point of Sale Server</option>                                            
                        </select>
                 </div>

                <form id="net_settings_form">
                 <div class="row">
                    <div class="form-group">
                        <label for="userName">Server IP Address*</label>
                        <input type="text" required="required" placeholder="Enter the IP address of the admin computer." name="ip" class="form-control" id="ip">
                    </div>
                    <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="userName">Till Number*</label>
                                    <input type="text" required="required" placeholder="Enter a number" name="till" class="form-control" id="till">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="userName">Hardware Identification Number </label>
                                    <input type="text" required="required" name="mac" class="form-control" id="mac" readonly="readonly">
                                </div>
                            </div>
                    </div>
                     <div class="form-group">
                        <input id="save_settings" type="submit" class="btn btn-default btn-block waves-effect waves-light" value="Save Settings">
                    </div>
                 </div>
                </form>
              


                 <form id="settings_form" encType="multipart/form-data">

                    <input type="hidden" name="id" id="settings_id">
                    <input type="hidden" name="img" id="logo_img">
                    <input type="hidden" name="remove" id="remove_logo">

                        <div class="row">
                            <div class="col-md-6">
                               
                                 <div class="form-group">
                                    <label for="userName">Store Name</label>
                                    <input type="text" required="required"  name="store" class="form-control" id="store">
                                 </div>
                                 <div class="form-group">
                                        <label for="userName">Address Line 1</label>
                                        <input type="text" required="required"  name="address_one" class="form-control" id="address_one">
                                 </div>
                                 <div class="form-group">
                                        <label for="userName">Address Line 2</label>
                                        <input type="text" required="required"  name="address_two" class="form-control" id="address_two">
                                 </div>
                                 <div class="form-group">
                                        <label for="userName">Contact Number</label>
                                        <input type="text" name="contact" class="form-control" id="contact">
                                 </div>
                                 <div class="form-group">
                                        <label for="userName">Vat Number</label>
                                        <input type="text" name="tax" parsley-trigger="change" class="form-control" id="tax">
                                 </div>
                              

                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="userName">Currency Symbol</label>
                                            <input type="text" required="required"  name="symbol" class="form-control" id="symbol">
                                     </div>
    
                                     <div class="form-group">
                                            <label for="userName">Vat Percentage</label>
                                            <div style="width: 80%; float:left;">
                                            <input type="text" required="required"  name="percentage" class="form-control" id="percentage">
                                            </div>
                                            <div class="pull-right p-t-10"> % </div>
                                     </div>
                                     <br><br>
                                     <div class="form-group">
                                        <label><input type="checkbox" name="charge_tax" id="charge_tax"> Charge Vat</label>
                                     </div>
                                     <div class="form-group">       
                                        <label for="userName"><span id="rmv_logo" class="btn btn-xs btn-warning">Remove</span> Logo </label>              
                                        <div id="current_logo"></div>                                        
                                       
                                        <input type="file" name="imagename" id="logoname">                            
                                    </div>
                                    <div class="form-group">
                                        <label for="userName">Receipt Footer</label>
                                        <textarea name="footer" class="form-control" id="footer"></textarea>
                                    </div>                                    
                            </div>
                           
                        </div>

                       
                        <div class="form-group">
                                <input id="save_settings" type="submit" class="btn btn-default btn-block waves-effect waves-light" value="Save Settings">
                        </div>

                    </form>
                    </div>
               </div>
          </div>
     </div>

  </div>

</div>

<script> window.$ = window.jQuery = require('jquery'); </script>

<script> 


require('./renderer.js');

    </script>

    <script src="{{ asset('assets/dskasir/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/jquery-ui/jquery.form.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/dataTables/jquery.dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/dataTables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/dataTables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/dataTables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/dskasir/plugins/dataTables/vfs_fonts.js') }}"></script>
    <!-- <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/jq-keyboard/jqkeyboard-min.js"></script>
    <script src="assets/plugins/jq-keyboard/jqk.layout.en.js"></script>
    <script src="assets/plugins/onscreen-keyboard/jquery.caret.min.js"></script> -->

    
    <script>

    // $(function () {
    //  "use strict";
    //     jqKeyboard.init({
    //         icon: "light"
    //       });
    //  });
 

    //  $('.holdOrderKeyboard').onscreenKeyboard({
	//     allowTypingClass: 'holdOrderInput'
    //   });


    //   $('.customerOrderKeyboard').onscreenKeyboard({
	//     allowTypingClass: 'holdCustomerOrderInput'
    //   });

     </script>

  </body>
</html>
<!-- https://github.com/tngoman/Store-POS -->
