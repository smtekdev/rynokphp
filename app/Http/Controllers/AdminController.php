<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Carts;

use App\Models\Products;

use App\Models\Order;

class AdminController extends Controller

{

    // Below function for orders
    public function orders()
    {
        $data=order::all();
        return view('admin.orders' ,compact('data'));
    }
 
public function cancelOrder($id)
{
    $data = Order::findOrFail($id);
    $data->delete();

    return redirect()->back();
}

public function user()
{
    $data=user::all();
    return view("admin.users", compact("data"));
}


    // public function index(){return view("adminhome");}
    public function Add_New_Category(){return view("admin.Add_New_Category");}
    public function Add_New_Product(){return view("admin.Add_New_Product");}
    public function Add_new_user(){return view("admin.Add_new_user");}
    public function Add_new_vendor(){return view("admin.Add_new_vendor");}
    public function All_users(){return view("admin.All_users");}
    public function apps_companies(){return view("admin.apps_companies");}
    public function apps_company_details(){return view("admin.apps_company_details");}
    public function apps_contacts(){return view("admin.apps_contacts");}
    public function apps_ecommerce(){return view("admin.apps_ecommerce");}
    public function apps_ecommerce_add_category(){return view("admin.apps_ecommerce_add_category");}
    public function apps_ecommerce_add_customer(){return view("admin.apps_ecommerce_add_customer");}
    public function apps_ecommerce_add_product(){return view("admin.apps_ecommerce_add_product");}
    public function apps_ecommerce_add_vendor(){return view("admin.apps_ecommerce_add_vendor");}
    public function apps_ecommerce_cart(){return view("admin.apps_ecommerce_cart");}
    public function apps_ecommerce_categories(){return view("admin.apps_ecommerce_categories");}
    public function apps_ecommerce_checkout(){return view("admin.apps_ecommerce_checkout");}
    public function apps_ecommerce_customers(){return view("admin.apps_ecommerce_customers");}
    public function apps_ecommerce_orders(){return view("admin.apps_ecommerce_orders");}
    public function apps_ecommerce_order_details(){return view("admin.apps_ecommerce_order_details");}
    public function apps_ecommerce_products(){return view("admin.apps_ecommerce_products");}
    public function apps_ecommerce_product_details(){return view("admin.apps_ecommerce_product_details");}
    public function apps_ecommerce_refund(){return view("admin.apps_ecommerce_refund");}
    public function apps_ecommerce_sellers(){return view("admin.apps_ecommerce_sellers");}
    public function apps_ecommerce_vendor(){return view("admin.apps_ecommerce_vendor");}
    public function apps_file_manager(){return view("admin.apps_file_manager");}
    public function apps_invoice(){return view("admin.apps_invoice");}
    public function basic_ui_lightbox(){return view("admin.basic_ui_lightbox");}
    public function Category_List(){return view("admin.Category_List");}
    // public function index_2(){return view("admin.index_2");}
    public function Invoices(){return view("admin.Invoices");}
//  public function login(){return view("admin.login");}
    
    

}