<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use File;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('products')->select('*')->get();
        return view('Backend.Products.list', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = DB::table('product_categories')->select('*')->get();
        return view('Backend.Products.create', compact('category'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'product_name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'long_desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required',
        ]);
        $data = new products();
        $destinationPath = public_path('Backend/images/multiple/');
        $multi_blog_images = [];
        if ($files = $request->file('mul_img')) {
            foreach ($files as $file_b) {
                $name = "Multiple-" . strtotime(date('d-m-Y h:i:s')) . $file_b->getClientOriginalName();
                $multi_blog_images[] = $name;
                $file_b->move($destinationPath, $name);
            }
            $data['mul_img'] = implode("|", $multi_blog_images);
        }
        $categoryName = DB::table('product_categories')->where('id', $request->category_id)->value('category_name');

        $imageFilename = $categoryName . '-' . $request->product_name . '.' . $request->file('image')->getClientOriginalExtension();
        $bannerImageFilename = $categoryName . '-' . $request->product_name . '.' . $request->file('banner_image')->getClientOriginalExtension();

        $imageDestinationPath = public_path('Backend/images/products/');
        $bannerImageDestinationPath = public_path('Backend/images/pagebnr/');

        $request->file('image')->move($imageDestinationPath, $imageFilename);
        $request->file('banner_image')->move($bannerImageDestinationPath, $bannerImageFilename);

        $data->image = $imageFilename;
        $data->banner_image = $bannerImageFilename;

        $data->category_name = $request->category_name;
        $data->product_name = $request->product_name;
        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->long_desc = $request->long_desc;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;

        $data->save();
        return redirect('Products')->with('success', 'Record Inserted Successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = DB::table('product_categories')->select('*')->get();
        $data = products::find($id);
        return view('Backend.Products.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'product_name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'long_desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // $category_id = $request->input('category_id');

        $categoryName = DB::table('product_categories')->select('category_name')->where('id', $request->category_id)->first()->category_name;
        // Remove spaces and replace them with hyphens in the category name
        $categoryName = str_replace(' ', '-', $categoryName);
        $data = products::find($id);
        $filename = "";
        $destinationPath = public_path('Backend/images/products/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/products/$data->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = $categoryName . '-' . $request->product_name . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }
        $filename1 = "";
        $destinationPath = public_path('Backend/images/pagebnr/');
        if ($request->hasFile('banner_image')) {
            $files = $request->file('banner_image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/pagebnr/$data->banner_image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename1 = $categoryName . '-' . $request->product_name . "." . $files->getClientOriginalExtension();
            $data->banner_image = $filename1;
            $files->move($destinationPath, $filename1);
        }
        $destinationPath = public_path('Backend/images/multiple/');
        $multi_blog_images = [];
        if ($files = $request->file('mul_img')) {
            foreach ($files as $file_b) {
                $name = "Multiple-" . strtotime(date('d-m-Y h:i:s')) . $file_b->getClientOriginalName();
                $multi_blog_images[] = $name;
                $file_b->move($destinationPath, $name);
            }
            $data->mul_img = implode("|", $multi_blog_images);
        }
        $data->category_name = $categoryName;
        $data->product_name = $request->product_name;
        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->long_desc = $request->long_desc;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        $data->save();
        return redirect('Products')->with('success', 'Record Inserted Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = products::find($id)->delete();
        return redirect('Products');
    }
}
