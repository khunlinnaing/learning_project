<!-- order pizza panel -->
<div class="leftBar col-3">
  <div class="container">
    <form action="" method="post" class="w-100 p-3">
      <div class="">
    <table class="table caption-top" id="target">
              <caption class="bold" style="font-size:20px;"><h3>Order List</h3></caption>
              <input type="text" name="id" id="cardId" hidden class="form-control">
              <thead>
                <tr class="mb-2">
                  <th scope="col" colspan="2">Menu</th>
                                      
                </tr>
              </thead>
              <tbody>
              <tr class="mb-2">
                  <td>Category Name</td>
                  <td ><input type="text" class="form-control border-0" id="categoryName" name="categoryName"></td>
                                      

                </tr>
                <tr class="mb-2">
                  <td>Pizza Name</td>
                  <td><input type="text" class="form-control border-0" id="pizzaName" name="pizzaName"></td>
                                      

                </tr>
                <tr class="mb-2">
                  <td>Price</td>
                  <td ><input type="text" class="form-control border-0" id="amount" name="amount"></td>

                </tr>
                <tr class="mb-2">
                  <td scope="row" >Quantity</td>
                  <td >
                    <input type="text" class="form-control border-0" id="qty" name="qty">
                </td>
                </tr>
                <tr class="mb-2">
                  <td scope="row" >Delivery Fee</td>
                  <td >
                    <input type="text" class="form-control border-0" id="qty" name="deliFee" value="3000">
                </td>
                </tr>
                                    
                <tr class="mb-2">
                                      
                  <td colspan="2"><button  class="btn btn-warning  w-100" id="cancel">Cancel</button></td>
                </tr>
              </tbody>
    </table>
    </div>
    <div class="">
                    <h4 class="text-secondary text-center my-3">User Info</h4>
                    <label for="">Name</label>
                    <input type="text" name="userName" class="form-control" placeholder="Enter your name..." id="">
                    <small class="text-danger"><?php  echo $nameError;?></small>

                    <br>

                    <label for="">Phone</label>
                    <input type="tel" name="phone" id="" placeholder="Enter your phone number" class="form-control">
                    <small class="text-danger"><?php echo $phoneError; ?></small>

                    <br>

                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter your email..." id="" class="form-control">
                    <small class="text-danger"><?php echo $emailError; ?></small>

                    <br>

                    <label for="">Address</label>
                    <textarea name="address" id="" placeholder="Enter your address..." class="form-control"></textarea>
                    <small class="text-danger"><?php  echo $addressError; ?></small>

                    <br>

                    <label for="">Message</label>
                    <textarea name="message" placeholder="Message..." id="" class="form-control"></textarea>
                    <br>
                    <input type="text" name="role" value="user" hidden id="">
                    <button type="reset" class="btn btn-danger  w-100 my-3">Remove</button>

    </div>
    <button type="submit" name="order" class="btn btn-primary w-100 ">Order Now</button>

    </form>
                              

  </div>
</div>