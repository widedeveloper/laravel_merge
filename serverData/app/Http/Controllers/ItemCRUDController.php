<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use DB;

class ItemCRUDController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //  $items = Item::orderBy('id','DESC')->paginate(5);
       //return view('ItemCRUD.index',compact('items'))
         //  ->with('i', ($request->input('page', 1) - 1) * 5);
		//-----------------------------------------------------
		//$items = Item::all();
		//return view('ItemCRUD.index')->with('items',$items);
		
		//return Item::all();
		
		//return view('ItemCRUD.create');
		
		
		//$var_dispatch = DB::select('SELECT * FROM dispatch_details');
		//return $var_dispatch;
		
		//$items=DB::select('SELECT * FROM dispatch_details');
		
		//$items = DB::table('dispatch_details')->paginate(15);
		
		$items = DB::table('dispatch_details')->orderBy('Pdate')->paginate(15);
		return view('ItemCRUD.index',compact('items')) ->with('i', ($request->input('page', 1) - 1) * 15);;
          
		
		
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	//$var_drivername = DB::select('SELECT driver_details.`Driver Name` FROM `driver_details`');
	//$var_drivername = DB::select('SELECT * FROM driver_details');
	//return $var_drivername;
	//return view('ItemCRUD.create')->with('var_drivername',$var_drivername);
    
	
	
	}
	
	
/**
for creating the search functionality 
*/
public function search()
{
	return "SEARCH FUNCTI";
    /*$profile = dispatch_details::where('Company', request()->id)->first();
	
    
    //optional, 
    if(is_null($profile)){
        return Response::json('error');
    }else{
        return Response::json('success');
    }
	*/
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        Item::create($request->all());
        return redirect()->route('itemCRUD.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('ItemCRUD.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('ItemCRUD.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        Item::find($id)->update($request->all());
        return redirect()->route('itemCRUD.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect()->route('itemCRUD.index')
                        ->with('success','Item deleted successfully');
    }
}
//Step 4: Create Blade File