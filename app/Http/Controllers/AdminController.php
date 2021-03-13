<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AdminValidation;
use App\Http\Requests\CategoryValidation;
use App\Http\Requests\ManufactureValidation;
use App\Http\Requests\ProductValidation;
use App\Http\Requests\CustomerValidation;
use App\Http\Requests\ShippingValidation;
use App\Http\Requests\paymentValidation;
use App\tbl_category;
use App\tbl_product;
use App\tbl_customer;
use App\tbl_manufacture;
use App\tbl_shipping;
use App\tbl_payment;
use App\profilepicture;
use App\tbl_order;
use App\message;
use App\item;
use App\items_details;
use App\tbl_stay;
use App\tbl_order_details;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
        $this->middleware('auth:web');
        $this->middleware('verified');
     }
    public function index()
    {
        $show=message::orderBy('id','desc')->limit(3)->get();
        $showw=message::orderBy('id','desc')->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $stay=tbl_stay::orderBy('id','desc')->get();
        return view('admin.dashboard',['pp'=>$pp,'show'=>$show,'showw'=>$showw,'stay'=>$stay]);
    }
    public function form()
    { 
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.newadminregister',['pp'=>$pp,'show'=>$show]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    // for notifucation
    public function MarkRead($id)
    {
        Auth::user()->unreadNotifications->find($id)->markAsRead();
        
        return redirect()->route('showallmsg');
    }


    // mark all
    public function allRead()
    {
        Auth::user()->unreadNotifications->markAsRead();
        
        return redirect()->back();
    }

    public function adminstore(AdminValidation $request)
    {
        User::create([
            'first_name'=>$request->get('fname'),
            'middle_name'=>$request->get('mname'),
            'last_name'=>$request->get('lname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'address'=>$request->get('address'),
            'contact'=>$request->get('contact'),
            'gender'=>$request->get('gender')
        ]);
        $request->session()->flash('msg','Admin Register Succesfully');
        return redirect()->back();
    }
    public function category()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.addcategory',['pp'=>$pp,'show'=>$show]);
    }
    public function profile()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.profile',['pp'=>$pp,'show'=>$show]);
    }
    public function fullsize()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.fullsize',['pp'=>$pp,'show'=>$show]);
    }
    public function personal()
    {
        $view=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=User::orderBy('id','desc')->where('username','=',Auth::user()->username)->get();
        $sho=User::orderBy('id','desc')->where('username','<>',Auth::user()->username)->get();
        return view('admin.personalinf',['show'=>$show,'view'=>$view,'pp'=>$pp,'sho'=>$sho]);
    }
     public function editdata($id)
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $editdata=User::find($id);
        return view('admin.updatedata',compact('editdata'),['pp'=>$pp,'show'=>$show]);
    }
    public function updateadmin(Request $request,$id)
    {
        $adminupdate=User::find($id);
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('admin/adminimage/',$image);
            //remove old image
            if($adminupdate->admin_image)
            {
                unlink('admin/adminimage/'.$adminupdate->admin_image);
            }
            $adminupdate->admin_image=$image;
        }
        $adminupdate->update([
           'first_name'=>$request->get('fname'),
            'middle_name'=>$request->get('mname'),
            'last_name'=>$request->get('lname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'contact'=>$request->get('contact'),
            'gender'=>$request->get('gender'), 
            'role'=>$request->get('role'), 
        ]);
        if(!$adminupdate)
        {
            $request->session()->flash('msg','Data Updated Failed');
        }
        $request->session()->flash('msg','Updated Admin Succesfully');
        return redirect()->back();
    }
    public function updateprofile($id)
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $updateprofile=User::find($id);
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.updateprofile',compact('updateprofile'),['pp'=>$pp,'show'=>$show]);
    }
    public function updatprofilestore(Request $request)
    {

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('admin/adminimage/',$image);
        }
        profilepicture::create([
            'image'=>$image,
            'user_id'=>$request->get('userid')

        ]);
        $request->session()->flash('msg','Profile Picture Updated');
        return redirect()->back();
    }
    public function addcategory(CategoryValidation $request)
    {
        tbl_category::create([
            'category_name'=>$request->get('categoryname'),
            'category_description'=>$request->get('categorydesc'),
            'publication_status'=>$request->get('pstatus'),
            'created_by'=>$request->get('addedby'),
        ]);
        $request->session()->flash('msg','Category Added succesfully');
        return redirect()->back();
    }
    public function manufacture()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=tbl_category::orderBy('id','asc')->get();
        $showww=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.manufacture',['show'=>$show,'pp'=>$pp,'show'=>$show,'showww'=>$showww]);
    }
    public function manufactureregister(ManufactureValidation $request)
    {
        tbl_manufacture::create([
            'manufacture_name'=>$request->get('manufacturename'),
            'manufacture_description'=>$request->get('manufacturedesc'),
            'publication_status'=>$request->get('pstatus'),
            'category_id'=>$request->get('category')
        ]);
        $request->session()->flash('msg','Manufacture Added succesfully');
        return redirect()->back();
    }
    public function viewmanufacture()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $view=tbl_manufacture::orderBy('id','asc')->get();
        return view('admin.viewmanufacture',['view'=>$view,'pp'=>$pp,'show'=>$show]);
    }
    public function editmanufacture($id)
    {
        $show=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $edit=tbl_manufacture::find($id);
        return view('admin.editmanufacture',compact('edit'),['pp'=>$pp,'show'=>$show]);

    }
    public function updatemanufacture(Request $request,$id)
    {
        $update=tbl_manufacture::find($id);
        $update->update([
            'manufacture_name'=>$request->get('manufacturename'),
            'manufacture_description'=>$request->get('manufacturedesc'),
            'publication_status'=>$request->get('pstatus')
        ]);
        $request->session()->flash('msg','Manufacture Updated succesfully');
        return redirect()->route('viewmanufacture');

    }
    public function viewcat()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=tbl_category::orderBy('id','desc')->get();
        return view('admin.viewcategory',['show'=>$show,'pp'=>$pp]);
    }
    public function editcat($id)
    {
        $show=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $edit=tbl_category::find($id);
        return view('admin.editcategory',compact('edit'),['pp'=>$pp,'show'=>$show]);
    }
    public function updatecat(Request $request,$id)
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $update=tbl_category::find($id);
        $update->update([
            'category_name'=>$request->get('categoryname'),
            'category_description'=>$request->get('categorydesc'),
            'publication_status'=>$request->get('pstatus'),
            'modified_by'=>$request->get('modifiedby')
        ]);
        $request->session()->flash('msg','Category Updated succesfully');
        return redirect()->route('viewcategory',['pp'=>$pp]);

    }
    public function deleteadmin($id)
    {
        $delete=User::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Admin deleted succesfully');
    }
    public function categorydelete($id)
    {
        $delete=tbl_category::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Category deleted succesfully');
    }
    public function deletemanu($id)
    {
        $delete=tbl_manufacture::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Manufacture deleted succesfully');
    }
    public function addproduct()
    {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=tbl_manufacture::orderBy('id','asc')->get();
        return view('admin.addproduct',['show'=>$show,'pp'=>$pp]);
    }
    public function createproduct(ProductValidation $request)
    { 
        $image=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('admin/productimage',$image);
        }
            tbl_product::create([
            'product_name'=>$request->get('productname'),
            'product_short_description'=>$request->get('productsd'),
            'product_long_description'=>$request->get('productld'),
            'product_price'=>$request->get('productpr'),
            'product_image'=>$image,
            'product_color'=>$request->get('productcolor'),
            'product_size'=>$request->get('productsize'),
            'publication_status'=>$request->get('pstatus'),
            'product_quantity'=>$request->get('productq')
        ]);
        $request->session()->flash('msg','New Product Added Succesfully');
        return redirect()->back();
    }
     public function showproduct()
     { 
        $sho=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
         $show=tbl_product::orderBy('id','desc')->get();
         return view('admin.showproduct',['show'=>$show,'pp'=>$pp,'sho'=>$sho]);
     }
     public function editproduct($id)
     {
        $show=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $edit=tbl_product::find($id);
        return view('admin.editproduct',compact('edit'),['pp'=>$pp,'show'=>$show]);
     }
     public function updateproduct(Request $request,$id)
     {
        $updateproduct=tbl_product::find($id);
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('admin/productimage',$image);
            //remove image
        if($updateproduct->product_image)
            {
                unlink('admin/productimage/'.$updateproduct->product_image);
            }
            $updateproduct->product_image=$image;
        }
        $updateproduct->update([
            'product_name'=>$request->get('productname'),
            'product_short_description'=>$request->get('productsd'),
            'product_long_description'=>$request->get('productld'),
            'product_price'=>$request->get('productpr'),
            'product_color'=>$request->get('productcolor'),
            'product_size'=>$request->get('productsize'),
            'publication_status'=>$request->get('pstatus'),
            'product_quantity'=>$request->get('productq')
        ]);
        if(!$updateproduct)
        {
            $request->session()->flash('msg','Product Updated Failed');
        }
            $request->session()->flash('msg','Product Updated Succesfully');
            return redirect()->route('showproduct');
     }
     public function deleteproduct($id)
     {
        $delete=tbl_product::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Product deleted succesfully');
     }
     public function customer()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.customer',['pp'=>$pp,'show'=>$show]);
     }
     public function addcustomer(CustomerValidation $request)
     {
        tbl_customer::create([
            'first_name'=>$request->get('fname'),
            'middle_name'=>$request->get('mname'),
            'last_name'=>$request->get('lname'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'phone'=>$request->get('contact'),
            'gender'=>$request->get('gender')
        ]);
        $request->session()->flash('message','New Customer Added Succesfully');
        return redirect()->back();
     }
     public function showcustomer()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $view=tbl_customer::orderBy('id','desc')->get();
        return view('admin.showcustomer',['view'=>$view,'pp'=>$pp,'show'=>$show]);
     }
     public function editcustomer($id)
     {
        $show=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $edit=tbl_customer::find($id);
        return view('admin.editcustomer',compact('edit'),['pp'=>$pp,'show'=>$show]);
     }
     public function updatecustomer(Request $request,$id)
     {
        $update=tbl_customer::find($id);
        $update->update([
            'first_name'=>$request->get('fname'),
            'middle_name'=>$request->get('mname'),
            'last_name'=>$request->get('lname'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'phone'=>$request->get('contact'),
            'gender'=>$request->get('gender')
        ]);
        if(!$update)
        {
            $request->session()->flash('message','Customer data Updated Failed');
        }
        $request->session()->flash('msg','Customer Updated Succesfully');
        return redirect()->route('showcustomer');
     }
     public function deletecustomer($id)
     {
        $delete=tbl_customer::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Customer deleted succesfully');
     }
     public function shipping()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.addshipping',['pp'=>$pp,'show'=>$show]);
     }
     public function addshipping(ShippingValidation $request)
     {
        tbl_shipping::create([
            'first_name'=>$request->get('fname'),
            'middle_name'=>$request->get('mname'),
            'last_name'=>$request->get('lname'),
            'address'=>$request->get('address'),
            'telephone'=>$request->get('contact'),
            'email'=>$request->get('email')
        ]);
        $request->session()->flash('msg','Shipping Inserted Succesfully');
        return redirect()->back();
     }
     public function viewshipping()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $shown=message::orderBy('id','desc')->limit(3)->get();
        $show=tbl_shipping::orderBy('id')->get();
        return view('admin.showshipping',['show'=>$show,'pp'=>$pp,'shown'=>$shown]);
     }
     public function editshipping($id)
     {
        $show=message::orderBy('id','desc')->limit(3)->get();
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $edit=tbl_shipping::find($id);
        return view('admin.editshipping',compact('edit'),['pp'=>$pp,'show'=>$show]);
     }
     public function updateshipping(Request $request,$id)
     {
        $update=tbl_shipping::find($id);
        $update->update([
            'first_name'=>$request->get('fname'),
            'middle_name'=>$request->get('mname'),
            'last_name'=>$request->get('lname'),
            'address'=>$request->get('address'),
            'telephone'=>$request->get('contact'),
            'email'=>$request->get('email')
        ]);
        if(!$update)
        {
            $request->session()->flash('msg','Shipping Updated Failed');
        }
        $request->session()->flash('msg','Shipping Updated Succesfully');
        return redirect()->route('showshipping');
     }
     public function deleteshipping($id)
     {
        $delete=tbl_shipping::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Shipping deleted');
     }
     public function showpayment()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.addpayment',['pp'=>$pp,'show'=>$show]);
     }
     public function addpayment(paymentValidation $request)
     {
        tbl_payment::create([
            'payment_method'=>$request->get('pmethod'),
            'payment_status'=>$request->get('pstatus')
        ]);
        $request->session()->flash('msg','payment Inserted Succesfully');
        return redirect()->back();
     }
     public function viewpayment()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=tbl_payment::orderBy('id')->get();
        $sho=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.showpayment',['show'=>$show,'pp'=>$pp,'sho'=>$sho]);
     }
     public function editpayment($id)
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $edit=tbl_payment::find($id);
        return view('admin.editpayment',compact('edit'),['pp'=>$pp,'show'=>$show]);
     }
     public function updatepayment(Request $request,$id)
     {
        $up=tbl_payment::find($id);
        $up->update([
            'payment_method'=>$request->get('pmethod'),
            'payment_status'=>$request->get('pstatus')
        ]);
        if(!$up)
        {
            $request->session()->flash('msg','payment Update failed');
        }
        $request->session()->flash('msg','payment Update Succesfully');
        return redirect()->route('viewpayment');
     }
     public function deletepayment($id)
     {
        $del=tbl_payment::find($id);
        $del->delete();
        return redirect()->back()->with('msg','Payment Delete Succesfully');
     }
     public function profilepicture()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.profilepicture',['pp'=>$pp,'show'=>$show]);
     }
     public function showprofilepicture()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->get();
        $shown=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.showprofilepicture',['show'=>$show,'pp'=>$pp,'shown'=>$shown]);
     }
     public function order()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.addorder',['pp'=>$pp,'show'=>$show]);
     }
     public function addorder(Request $request)
     {
        tbl_order::create([
            'order_total'=>$request->get('torder'),
            'order_status'=>$request->get('ostatus')
        ]);
        $request->session()->flash('msg','New order inserted succesfully');
        return redirect()->back();
     }
     public function showorder()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=tbl_order::orderBy('id','desc')->get();
        $sho=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.showorder',['show'=>$show,'pp'=>$pp,'sho'=>$sho]);
     }
     public function orderdetail()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $s=tbl_order_details::orderBy('id','desc')->get();
        return view('admin.showorderdetail',['pp'=>$pp,'show'=>$show,'s'=>$s]);
     }
     public function editorder($id)
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $e=tbl_order::find($id);
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.updateorder',compact('e'),['pp'=>$pp,'show'=>$show]);
     }
     public function updateorder(Request $request,$id)
     {
        $update=tbl_order::find($id);
        $update->update([
            'order_total'=>$request->get('torder'),
            'order_status'=>$request->get('ostatus')
        ]);
        if(!$update)
        {
            $request->session()->flash('msg','Order Updated Failed');
        }
        $request->session()->flash('msg','Order Updated Succesfully');
        return redirect()->route('showorder');
     }
     public function deleteorder($id)
     {
        $d=tbl_order::find($id);
        $d->delete();
        return redirect()->back()->with('msg','Order delete Succesfully');
     }
     public function profilefullsize()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.profilefullsize',['pp'=>$pp,'show'=>$show]);
     }
     public function showallmsg()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $showw=message::orderBy('id','desc')->paginate(7);
        return view('admin.showallmsg',['show'=>$show,'pp'=>$pp,'showw'=>$showw]);
     }
     public function item()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $s=item::orderBy('id','desc')->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.item',['pp'=>$pp,'show'=>$show,'s'=>$s]);
     }
     public function additem(Request $request)
     {
        $image=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('admin/itemimage',$image);
        }
        $items=item::create([
            'item_name'=>$request->get('itemname'),
            'item_image'=>$image,
            'item_price'=>$request->get('itemprice'),
            'item_model_number'=>$request->get('itemmodel'),
            'item_size'=>$request->get('itemsize'),
            'item_type'=>$request->get('itemtype'),
            'item_short_desc'=>$request->get('itemshort'),
            'item_long_desc'=>$request->get('itemlong'),
        ]);
        $imagename=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            foreach($file as $s)
            {
                $imagename=mt_rand(1001,9999999).'_'.$s->getClientOriginalName();
                $s->move('admin/itemimage',$imagename);
                items_details::create([
                    'item_id'=>$items->id,
                    'item_image'=>$imagename
                ]);
            }
        }
        $request->session()->flash('msg','Product Added Succesfully');
        return redirect()->back();
     }
     public function showitem()
     {
        $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        $shoow=item::orderBy('id','desc')->paginate(30);
        $view=item::orderBy('id','desc')->get();
        return view('admin.showitem',['pp'=>$pp,'shoow'=>$shoow,'show'=>$show,'view'=>$view]);
     }
     public function deleteitem($id)
     {
        $delete=item::find($id);
        $delete->delete();
        return redirect()->back()->with('msg','Item deleted Succesfully');
     }
     
}
