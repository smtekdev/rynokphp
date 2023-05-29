

<!-- Code from actual dashboard for products -->

<div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab">
                                <div class="product-tab">
                                    <div class="title">
                                        <h2>All Product</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="table-responsive dashboard-bg-box">
                                        <table class="table product-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Images</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Sales</th>
                                                    <th scope="col">Edit / Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <img src="assets/images2/vegetable/product/top-product-3.png" class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Smart Watch</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$25.69</h6>
                                                    </td>
                                                    <td>
                                                        <h6>63</h6>
                                                    </td>
                                                    <td>
                                                        <h6>152</h6>
                                                    </td>
                                                    <td class="efit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">
                                                        <img src="assets/images2/vegetable/product/top-rated-4.png" class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Large Bag</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$35.36</h6>
                                                    </td>
                                                    <td>
                                                        <h6>14</h6>
                                                    </td>
                                                    <td>
                                                        <h6>34</h6>
                                                    </td>
                                                    <td class="efit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>

                                                
                                            </tbody>
                                        </table>

                                        <nav class="custome-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                        <i class="fa-solid fa-angles-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0)">1</a>
                                                </li>
                                                <li class="page-item" aria-current="page">
                                                    <a class="page-link" href="javascript:void(0)">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="fa-solid fa-angles-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>



<!-- From Restaurent code -->

                            
<div style="background-color: #f7f7f7; padding: 20px;">

<form action="{{url('/uploadproducts')}}" method="post" enctype="multipart/form-data">

@csrf

  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Title</label>
    <input type="text" name="title" placeholder="Write a title" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Price</label>
    <input type="text" name="price" placeholder="Write a price" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Image</label>
    <input type="file" name="image" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Description</label>
    <input type="text" name="discription" placeholder="Description" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div>
      <input type="submit" value="Save" style="border:1px solid black; padding:10px; border-radius:1rem; background-color:#61DBFF;">
  </div>
</form>

<br><br>

<div>

</div>
</div>